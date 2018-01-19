<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class AppletGameController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionLogin()
    {
        $appId = 'wx7c7cbfc1ea2daca4';
        $appSecret = '3fb693d110627f9983952796bff21369';
        $postContent = $this->getRequestContent();

        $result = $this->curlGet("https://api.weixin.qq.com/sns/jscode2session?appid={$appId}&secret={$appSecret}&js_code={$postContent->code}&grant_type=authorization_code");

        var_dump($result);
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

        return $output;
    }
}