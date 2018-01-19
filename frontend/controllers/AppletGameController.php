<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\WeixinUser;

class AppletGameController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionLogin()
    {
        $appId = 'wx9d5999dd76914f1c';
        $appSecret = '523cf45e47a015d16ba30e4e50d62038';
        $postContent = $this->getRequestContent();
        $redis = Yii::$app->redis;

        $result = $this->curlGet("https://api.weixin.qq.com/sns/jscode2session?appid={$appId}&secret={$appSecret}&js_code={$postContent['code']}&grant_type=authorization_code");

        if (isset($result['openid'])) {
            $token = md5($result['openid']);

            $redis->setValue($token, json_encode($result));
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

        return json_decode([
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
            return json_encode([
                'code' => 0,
                'data' => [
                    'nickName' => Yii::$app->weixinUser->nickName,
                    'avatarUrl' => Yii::$app->weixinUser->avatarUrl
                ]
            ]);
        }

        return json_encode([
            'code' => -1,
            'msg' => 'error: not current user'
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