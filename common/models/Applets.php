<?php
namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class Applets extends ActiveRecord
{
    const STATUS_ERROR = 0;

    const STATUS_SUCCESS = 1;

    public static function tableName()
    {
        return 'applets';
    }

    public function rules()
    {
        return [
            [['name', 'app_id', 'app_secret', 'call_domain', 'share_title', 'share_description', 'share_thumb', 'share_url', 'status', 'is_redirect'], 'required'],
            [['name', 'app_id', 'app_secret', 'call_domain', 'share_title', 'share_description', 'share_thumb', 'share_url'], 'string'],
            [['created_at', 'status', 'is_redirect'], 'integer']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'app_id' => '小程序Id',
            'app_secret' => '小程序密钥',
            'status' => '状态',
            'is_redirect' => '是否跳转',
            'call_domain' => '回调域名',
            'share_title' => '分享标题',
            'share_description' => '分享描述',
            'share_thumb' => '分享缩略图',
            'share_url' => '分享Url',
            'created_at' => '创建时间'
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at']
                ],
            ],
        ];
    }

    public function sendMessage($data)
    {
        $access_token = $this->getAccessToken();
        $url = "https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token={$access_token}";

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

    public function getAccessToken()
    {
        $cache = Yii::$app->cache;
        if ($access_token = $cache->get("{$this->app_id}_access_token")) {
            return $access_token;
        }

        $result = $this->curlGet("https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid={$this->app_id}&secret={$this->app_secret}");
        $result = json_decode($result, true);

        $cache->set("{$this->app_id}_access_token", $result['access_token'], $result['expires_in'] - 600);

        return $result['access_token'];
    }

    public function getSendLinkJson($openId)
    {
        return json_encode([
            'touser' => $openId,
            'msgtype' => 'link',
            'link' => [
                'title' => $this->share_title,
                'description' => $this->share_description,
                'url' => $this->share_url,
                'thumb_url' => $this->share_thumb
            ]
        ], JSON_UNESCAPED_UNICODE);
    }

    public function checkSignature()
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
            return Yii::$app->request->get('echostr');
        } else {
            return 'error';
        }
    }
}