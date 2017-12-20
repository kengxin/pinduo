<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class AppletsController extends Controller
{

    public $enableCsrfValidation = false;

    public function actionConfig()
    {
        if (!Yii::$app->request->isPost) {
            if ($this->checkSignature()) {
                return Yii::$app->request->get('echostr');
            }

            return 'error';
        }

        return $this->event();
    }

    public function event()
    {
        $openId = Yii::$app->request->get('openid', false);
        if (!$openId) {
            return false;
        }

        $accessToken = $this->getAccessToken('wx9d5999dd76914f1c', '36dc6e798e3eb08d455df5593de70a6e');
        $jsonData = json_encode($this->getSendLinkJson($openId));

        return $this->curlPost("https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token={$accessToken}", $jsonData);
    }

    public function curlPost($url, $data)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $output = curl_exec($ch);

        curl_close($ch);

        return $output;
    }

    public function curlGet($url)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $output = curl_exec($ch);

        curl_close($ch);

        return $output;
    }

    private function checkSignature()
    {
        $signature = Yii::$app->request->get('signature');
        $timestamp = Yii::$app->request->get('timestamp');
        $nonce = Yii::$app->request->get('nonce');

        $token = 'bzwsh';
        $tmpArr = [$token, $timestamp, $nonce];
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode($tmpArr);
        $tmpStr = sha1($tmpStr);

        if($tmpStr == $signature){
            return true;
        } else {
            return false;
        }
    }

    public function getSendLinkJson($openId)
    {
        return [
            'touser' => $openId,
            'msgtype' => 'link',
            'link' => [
                'title' => '耿鑫最英俊',
                'description' => '耿英俊是耿鑫',
                'url' => 'https://www.baidu.com',
                'thumb_url' => 'http://pinphoto.oss-cn-beijing.aliyuncs.com/u=532399495,2496592683&fm=27&gp=0.jpg'
            ]
        ];
    }

    public function getAccessToken($appId, $appSecret)
    {
        $cache = Yii::$app->cache;
        if ($access_token = $cache->get($appId)) {
            return $access_token;
        }

        $result = $this->curlGet("https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid={$appId}&secret={$appSecret}");
        $result = json_decode($result, true);

        $cache->set($appId, $result['access_token'], $result['expires_in'] - 600);

        return $result['access_token'];
    }

    public function getJson()
    {
        $result = file_get_contents('php://input');

        return json_decode($result, true);
    }
}