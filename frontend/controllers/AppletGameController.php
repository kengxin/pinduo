<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Prizes;
use common\models\GameLog;
use common\models\GameInfo;
use common\models\GroupLog;
use common\models\WeixinPay;
use common\models\WeixinUser;
use WxDecrypt\WxBizDataCrypt;
use common\models\AppletReward;

class AppletGameController extends Controller
{
    public $enableCsrfValidation = false;

    public $appId = 'wxbbcb5bf09c262a61';

    public $appSecret = '8f830afa3f3323396ca57935ac36adb7';

    public function actionIndex()
    {
        if (Yii::$app->session->get('user_id', false) == false) {
            $code = Yii::$app->request->get('code', false);
            if ($code) {
                $result = $this->curlGet("https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx2ce7f0ec104b86de&secret=52737a83b36568709f132ce996edcdd3&code={$code}&grant_type=authorization_code");
                if (!isset($result['errcode'])) {
                    $access_token = $result['access_token'];
                    $openid = $result['openid'];

                    $userInfo = $this->curlGet("https://api.weixin.qq.com/sns/userinfo?access_token={$access_token}&openid={$openid}&lang=zh_CN");

                    $user = WeixinUser::findOne(['unionid' => $userInfo['unionid']]);
                    if ($user) {
                        Yii::$app->session->set('user_id', $user->id);

                        $obtainList = AppletReward::find()->where(['user_id' => $user->id, 'status' => AppletReward::STATUS_OBTAIN])->asArray()->all();
                        $receiveList = AppletReward::find()->where(['user_id' => $user->id, 'status' => AppletReward::STATUS_RECEIVE])->asArray()->all();
                    }
                }

                return $this->renderPartial('index', [
                    'user' => isset($user) ? $user : [],
                    'obtainList' => isset($obtainList) ? $obtainList : [],
                    'receiveList' => isset($receiveList) ? $receiveList : []
                ]);
            } else {
                return $this->redirect('https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx2ce7f0ec104b86de&redirect_uri=http%3a%2f%2fh5.3l60.cn%2fapplet-game%2findex&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect');
            }
        } else {
            $user_id = Yii::$app->session->get('user_id');
            $user = WeixinUser::findOne($user_id);
            if ($user) {
                $obtainList = AppletReward::find()->where(['user_id' => $user_id, 'status' => AppletReward::STATUS_OBTAIN])->asArray()->all();
                $receiveList = AppletReward::find()->where(['user_id' => $user_id, 'status' => AppletReward::STATUS_RECEIVE])->asArray()->all();
            }

            return $this->renderPartial('index', [
                'user' => isset($user) ? $user : [],
                'obtainList' => isset($obtainList) ? $obtainList : [],
                'receiveList' => isset($receiveList) ? $receiveList : []
            ]);
        }
    }

    public function actionSaveReward()
    {
        $real_name = Yii::$app->request->post('real-name', false);
        $tel = Yii::$app->request->post('tel', false);
        $address = Yii::$app->request->post('address', false);
        $reward_id = intval(Yii::$app->request->post('reward_id', false));

        if (!$reward_id || !$address || !$tel || !$real_name) {
            return json_encode([
                'code' => -1
            ]);
        }

        $rewardInfo = AppletReward::findOne($reward_id);
        if (!empty($rewardInfo)) {
            if ($rewardInfo->user_id == Yii::$app->session->get('user_id', false)) {
                if ($rewardInfo->saveOrder($real_name, $tel, $address)) {
                    return json_encode([
                        'code' => 0
                    ]);
                }
            }
        }

        return json_encode([
            'code' => -1
        ]);
    }

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
                        'c' => '',
                        'user_id' => $userInfo->id,
                        'token' => $token
                    ]
                ]);
            } else {
                return json_encode([
                    'code' => -1,
                    'data' => [
                        'c' => '',
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
                if ($groupLogs->saveGroupLog($decodeData->openGId, intval($postData['type']), boolval($postData['type']))) {
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
                                'show' => 0,
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
        $csrf = $postData['_csrf'];

        $user_id = Yii::$app->weixinUser->id;
        if ($csrf != md5($gameId . $currentNum . $user_id)) {
            return json_encode([
                'code' => -2
            ]);
        }

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

    public function actionGetPayConfig()
    {
        $postData = $this->getRequestContent();
        $type_id = intval($postData['type_id']);

        $typeList = [
            1 => ['info' => '购买1次挑战机会', 'total_fee' => 1, 'extra' => ['count' => 1]],
            2 => ['info' => '购买3次挑战机会', 'total_fee' => 2, 'extra' => ['count' => 3]],
            3 => ['info' => '购买8次挑战机会', 'total_fee' => 3, 'extra' => ['count' => 8]]
        ];

        if (isset($typeList[$type_id])) {
            $weixinPay = new WeixinPay();
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
            if (($userInfo = WeixinUser::findOne(['openid' => $result['openid']])) != null) {
                if (($weixinPay = WeixinPay::findOne((intval($result['out_trade_no']) - 10000))) != null) {
                    $weixinPay->setSuccess($result['bank_type'], $result['transaction_id']);

                    $count = json_decode($weixinPay->extra, true);
                    return GameInfo::addLastNumber($userInfo->id, $count['count']);
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

    public function decodeXml($xml)
    {
        libxml_disable_entity_loader(true);

        $xmlString = simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA);

        $val = json_decode(json_encode($xmlString), true);

        return $val;
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