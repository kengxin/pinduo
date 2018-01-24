<?php
namespace frontend\controllers;

use common\models\GameLog;
use common\models\Prizes;
use Yii;
use yii\web\Controller;
use common\models\GameInfo;
use common\models\GroupLog;
use common\models\WeixinUser;
use WxDecrypt\WxBizDataCrypt;

class AppletGameController extends Controller
{
    public $enableCsrfValidation = false;

    public $appId = 'wx9d5999dd76914f1c';

    public $appSecret = 'ded38d839ab3841e35ccf6b91e7c462e';

    public function actionLogin()
    {
        $postContent = $this->getRequestContent();
        $redis = Yii::$app->redis;

        $result = $this->curlGet("https://api.weixin.qq.com/sns/jscode2session?appid={$this->appId}&secret={$this->appSecret}&js_code={$postContent['code']}&grant_type=authorization_code");

        if (isset($result['openid'])) {
            $token = md5($result['openid']);

            $redis->set($token, json_encode($result));
            if (($userInfo = WeixinUser::find()
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

        if (Yii::$app->weixinUser->login) {
            $weixinUser = new WeixinUser();
            if ($weixinUser->saveUser($postContent)) {
                return json_encode([
                    'code' => 0,
                    'data' => [
                        'user_id' => $weixinUser->id
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
        if (Yii::$app->weixinUser->id == $user_id) {
            $gameInfoModel = new GameInfo();
            $gameInfo = $gameInfoModel->getGameInfo($user_id);
            return json_encode([
                'code' => 0,
                'data' => [
                    'nickName' => Yii::$app->weixinUser->nickName,
                    'avatarUrl' => Yii::$app->weixinUser->avatarUrl,
                    'gameInfo' => $gameInfo
                ]
            ]);
        }

        return json_encode([
            'code' => -1,
            'msg' => 'error: not current user'
        ]);
    }

    public function actionGetGroupId()
    {
        $decodeData = '';
        $postData = $this->getRequestContent();

        $decode = new WxBizDataCrypt($this->appId, Yii::$app->weixinUser->session_key);
        if ($decode->decryptData($postData['encryptedData'], $postData['iv'], $decodeData) == 0) {
            $decodeData = json_decode($decodeData);
            $groupLogs = new GroupLog();
            if (!$groupLogs->getLogExists($decodeData->openGId, intval($postData['type']))) {
                if ($groupLogs->saveGroupLog($decodeData->openGId, boolval($postData['type']))) {
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

    public function actionJoinGame()
    {
        if (($gameInfo = GameInfo::findOne(['user_id' => Yii::$app->weixinUser->id])) != null) {
            if ($gameInfo->lastNumber > 0) {
                $gameInfo->lastNumber--;
                $gameInfo->playNumber++;
                if ($gameInfo->save()) {
                    $gameLog = new GameLog();
                    if ($gameLog->startGame($gameInfo->user_id)) {
                        return json_encode([
                            'code' => 0,
                            'data' => [
                                'game_id' => $gameLog->id
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

    public function actionCloseGame()
    {
        $postData = $this->getRequestContent();
        $gameId = intval($postData['gameId']);
        $currentNum = intval($postData['currentNum']);

        $gameLog = new GameLog();
        if ($gameLog->closeGame($gameId, $currentNum)) {
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
        $gameModel = new GameInfo();
        $prizesModel = new Prizes();

        $iqRank = $gameModel->getIqRand();
        $resolveRank = $gameModel->getResolveRank();
        $groupRank = $gameModel->getGroupRank();

        $prizesList = $prizesModel->getPrizesList();

        $joinCount = GameLog::find()->count();

        return json_encode([
            'code' => 0,
            'data' => [
                'currentJoin' => $joinCount,
                'iqRank' => $iqRank,
                'resolveRank' => $resolveRank,
                'groupRank' => $groupRank,
                'prizesList' => $prizesList
            ]
        ]);
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