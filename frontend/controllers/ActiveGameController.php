<?php
namespace frontend\controllers;

use common\models\year\YearGroupLog;
use common\models\year\YearWeixinPay;
use WxDecrypt\WxBizDataCrypt;
use Yii;
use yii\web\Controller;
use common\models\GameInfo;
use common\models\WeixinPay;
use common\models\WeixinUser;
use common\models\year\YearGame;
use common\models\year\YearUser;
use common\models\year\YearAnswer;
use common\models\year\YearGameLog;
use common\models\year\YearQuestionLog;

class ActiveGameController extends Controller
{
    public $enableCsrfValidation = false;

    public $appId = 'wxd871b73404029273';

    public $appSecret = 'c54e4f211e4f1610744f2d177525b744';

    public function actionLogin()
    {
        $postContent = $this->getRequestContent();
        $redis = Yii::$app->redis;

        $result = $this->curlGet("https://api.weixin.qq.com/sns/jscode2session?appid={$this->appId}&secret={$this->appSecret}&js_code={$postContent['code']}&grant_type=authorization_code");

        if (isset($result['openid'])) {
            $token = md5($result['openid']);

            $redis->set('year_' . $token, json_encode($result));
            if (($userInfo = YearUser::find()
                    ->select(['id'])
                    ->where(['openid' => $result['openid']])
                    ->one()) != null) {
                return json_encode([
                    'code' => 0,
                    'data' => [
                        'user_id' => $userInfo->id,
                        'token' => $token
                    ]
                ]);
            } else {
                return json_encode([
                    'code' => -1,
                    'data' => [
                        'token' => $token
                    ]
                ]);
            }
        }

        return json_encode([
            'code' => -2
        ]);
    }

    public function actionRegister()
    {
        $postContent = $this->getRequestContent();

        if (Yii::$app->yearUser->login) {
            $yearUser = new YearUser();
            if ($yearUser->saveUser($postContent)) {
                return json_encode([
                    'code' => 0,
                    'data' => [
                        'user_id' => $yearUser->id
                    ]
                ]);
            }
        }

        return json_encode([
            'code' => -1
        ]);
    }

    public function actionGetUserInfo($user_id)
    {
        $user_id = intval($user_id);
        if (Yii::$app->yearUser->id == $user_id) {
            $gameInfoModel = new YearGame();
            $gameInfo = $gameInfoModel->getGameInfo($user_id);
            return json_encode([
                'code' => 0,
                'data' => [
                    'nickName' => Yii::$app->yearUser->nickName,
                    'avatarUrl' => Yii::$app->yearUser->avatarUrl,
                    'gameInfo' => $gameInfo
                ]
            ]);
        }

        return json_encode([
            'code' => -1,
            'msg' => 'error: not current user'
        ]);
    }

    public function actionJoinGame()
    {
        if (($gameInfo = YearGame::findOne(['user_id' => Yii::$app->yearUser->id])) != null) {
            if ($gameInfo->lastNumber > 0) {
                $gameInfo->lastNumber--;
                $gameInfo->playNumber++;
                if ($gameInfo->save()) {
                    $gameLog = new YearGameLog();
                    if ($gameLog->startGame($gameInfo->user_id)) {
                        $questionLog = new YearQuestionLog();
                        $questionInfo = $questionLog->getQuestion($gameLog->id, $gameLog->user_id, $gameLog->current_num);
                        return json_encode([
                            'code' => 0,
                            'data' => [
                                'game_id' => $gameLog->id,
                                'questionInfo' => $questionInfo
                            ]
                        ]);
                    }
                }
            }
        }

        return json_encode([
            'code' => -1
        ]);
    }

    public function actionSendAnswer()
    {
        $postData = $this->getRequestContent();

        $question_id = isset($postData['question_id']) ? intval($postData['question_id']) : 0;
        $answer_id = isset($postData['answer_id']) ? intval($postData['answer_id']) : 0;
        $game_id = isset($postData['game_id']) ? intval($postData['game_id']) : 0;

        $gameLogInfo = YearGameLog::findOne($game_id);
        $questionLogInfo = YearQuestionLog::find()
            ->where(['game_id' => $game_id, 'is_correct' => YearQuestionLog::STATUS_START])
            ->orderBy('id DESC')
            ->one();
        if (!empty($gameLogInfo) && !empty($questionLogInfo)) {
            if ($questionLogInfo->question_id == $question_id) {
                $answerInfo = YearAnswer::findOne(['question_id' => $question_id, 'is_correct' => YearAnswer::STATUS_SUCCESS]);
                if ($answerInfo->id == $answer_id) {

                    $questionLogInfo->is_correct = YearQuestionLog::STATUS_SUCCESS;
                    $questionLogInfo->save();
                    $gameLogInfo->current_num++;
                    $gameLogInfo->save();

                    $questionLog = new YearQuestionLog();
                    $questionInfo = $questionLog->getQuestion($gameLogInfo->id, $gameLogInfo->user_id, $gameLogInfo->current_num);

                    return json_encode([
                        'code' => 0,
                        'data' => [
                            'status' => true,
                            'questionInfo' => $questionInfo,
                            'currentNum' => $gameLogInfo->current_num
                        ]
                    ]);
                } else {
                    $questionLogInfo->is_correct = YearQuestionLog::STATUS_ERROR;
                    $questionLogInfo->save();

                    $questionLog = new YearQuestionLog();
                    $questionInfo = $questionLog->getQuestion($gameLogInfo->id, $gameLogInfo->user_id, $gameLogInfo->current_num);

                    return json_encode([
                        'code' => 0,
                        'data' => [
                            'status' => false,
                            'questionInfo' => $questionInfo,
                            'currentNum' => $gameLogInfo->current_num
                        ]
                    ]);
                }
            }
        }

        return json_encode([
            'code' => -1
        ]);
    }

    public function actionGetGroupId()
    {
        $postData = $this->getRequestContent();

        $decodeData = '';
        $encryptedData = trim($postData['encryptedData']);
        $iv = trim($postData['iv']);
        $user_id = Yii::$app->yearUser->id;

       $decode = new WxBizDataCrypt($this->appId, Yii::$app->yearUser->session_key);
       if ($decode->decryptData($encryptedData, $iv, $decodeData) == 0) {
           $decodeData = json_decode($decodeData);
           $groupLogs = new YearGroupLog();
           if (!$groupLogs->existsLog($user_id, $decodeData->openGId)) {
               if ($groupLogs->saveLog($user_id, $decodeData->openGId)) {
                   return json_encode([
                       'code' => 0,
                       'data' => [
                           'groupId' => $decodeData->openGId
                       ]
                   ]);
               }
           }
       }

       return json_encode([
           'code' => -1
       ]);
    }

    public function actionCloseGame()
    {
        $postData = $this->getRequestContent();
        $game_id = intval($postData['game_id']);
        $current_num = intval($postData['current_num']);

        $gameLog = new YearGameLog();
        if ($gameLog->closeGame($game_id, $current_num)) {
            return json_encode([
                'code' => 0
            ]);
        }

        return json_encode([
            'code' => -1
        ]);
    }

    public function actionGetRank()
    {
        $gameModel = new YearGame();
        $gameList = $gameModel->getRankList();

        return json_encode([
            'code' => 0,
            'data' => $gameList
        ]);
    }

    public function actionGetPayConfig()
    {
        $postData = $this->getRequestContent();
        $type_id = intval($postData['type_id']);

        $typeList = [
            1 => ['info' => '春节活动购买1次挑战机会', 'total_fee' => 1, 'extra' => ['count' => 1]],
            2 => ['info' => '春节活动购买3次挑战机会', 'total_fee' => 2, 'extra' => ['count' => 3]],
            3 => ['info' => '春节活动购买8次挑战机会', 'total_fee' => 3, 'extra' => ['count' => 8]]
        ];

        if (isset($typeList[$type_id])) {
            $weixinPay = new YearWeixinPay();
            $result = $weixinPay->startPay($typeList[$type_id]['info'], $typeList[$type_id]['total_fee'], $typeList[$type_id]['extra']);
            if ($result) {
                return json_encode([
                    'code' => 0,
                    'data'=> $result
                ]);
            }
        }

        return json_encode([
            'code' => -1
        ]);
    }

    public function actionPayResult()
    {
        return Yii::$app->weixinPay->payResult(function ($result) {
            if (($userInfo = YearUser::findOne(['openid' => $result['openid']])) != null) {
                if (($weixinPay = YearWeixinPay::findOne((intval($result['out_trade_no']) - 1000000))) != null) {
                    $weixinPay->setSuccess($result['bank_type'], $result['transaction_id']);

                    $count = json_decode($weixinPay->extra, true);
                    return YearGame::addLastNumber($userInfo->id, $count['count']);
                }
            }

            return false;
        });
    }

    public function getRequestContent()
    {
        $result = file_get_contents('php://input');
        if (!empty($result)) {
            $result = json_decode($result, true);

            return $result;
        }

        return false;
    }

    public function curlGet($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        $output = curl_exec($ch);

        curl_close($ch);

        return json_decode($output, true);
    }
}