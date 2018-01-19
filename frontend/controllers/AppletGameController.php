<?php
namespace frontend\controllers;

use common\models\WeixinUser;
use Yii;
use yii\web\Controller;

class AppletGameController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionLogin()
    {
        $appId = 'wx9d5999dd76914f1c';
        $appSecret = '523cf45e47a015d16ba30e4e50d62038';
        $postContent = $this->getRequestContent();

        $result = $this->curlGet("https://api.weixin.qq.com/sns/jscode2session?appid={$appId}&secret={$appSecret}&js_code={$postContent['code']}&grant_type=authorization_code");

        if (isset($result['openid'])) {
            if (WeixinUser::find()
                ->where(['openid' => $result['openid']])
                ->exists()) {
                return json_encode([
                    'code' => 0,
                    'data' => [
                        'token' => 'success'
                    ]
                ]);
            } else {
                return json_encode([
                    'code' => -1,
                    'data' => [
                        'token' => 'success'
                    ]
                ]);
            }
        }

        return json_decode([
            'code' => -2
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