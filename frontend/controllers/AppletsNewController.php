<?php
namespace frontend\controllers;

use common\models\Applets;
use common\models\AppletsVideo;
use common\models\PhoneLogs;
use Yii;
use yii\log\Logger;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class AppletsNewController extends Controller
{
    public $applet = null;
    public $enableCsrfValidation = false;

    public function actionConfig()
    {
        $serverName = $_SERVER['HTTP_HOST'];
        if (!isset($serverName)) {
            throw new NotFoundHttpException();
        }

        if (($this->applet = Applets::findOne(['call_domain' => $serverName])) == null) {
            throw new NotFoundHttpException();
        }

        if (!Yii::$app->request->isPost) {
            return $this->applet->checkSignature();
        }

        return $this->event();
    }

    public function actionGetStatus($applet_id)
    {
        $applet_id = intval($applet_id);
        $appletInfo = Applets::findOne($applet_id);

        if ($appletInfo == null) {
            return json_encode([
                'code' => -1
            ]);
        }

        return json_encode([
            'code' => 0,
            'data' => [
                'id' => $applet_id,
                'status' => boolval($appletInfo->status)
            ]
        ]);
    }

    public function actionGetVideo()
    {
        $id = Yii::$app->request->get('video_id', null);

        if (($video = AppletsVideo::find()->filterWhere(['id' => $id])->one()) == null) {
            return json_encode([
                'code' => -1
            ]);
        }

        $adList = ['cat85858','cat151151','cat155155','cat158158','cat518158','cat559558','cat658658','ciantang128','ciantang160','ciantang168','ciantang186','WHF2160','WHQ6223','yaqian2256','zby4455'];

        return json_encode([
            'code' => 0,
            'msg' => 'success',
            'data' => [
                'video_id' => $video->id,
                'video_src' => $video->video_url,
                'video_name' => $video->name,
                'video_thumb' => $video->share_thumb,
                'video_pause' => $video->pause_time,
                'video_share' => $video->share_num,
                'video_list' => $video->getList(),
                'copy_info' => $adList[array_rand($adList, 1)]
            ]
        ]);
    }

    public function event()
    {
        $openId = Yii::$app->request->get('openid', false);
        if (!$openId) {
            return false;
        }

        return $this->applet->sendMessage($this->applet->getSendLinkJson($openId));
    }

    public function actionUploadPhoneInfo($phoneInfo)
    {
        $phoneLogs = new PhoneLogs();

        if ($phoneLogs->saveLog($phoneInfo)) {
            $json = json_decode($phoneInfo);
            $sendMsg = [
                '小程序截图通知',
                '有个傻逼截图了',
                "品牌: {$json->brand}",
                "型号: {$json->model}"
            ];
//            Yii::$app->sendMsg->sendWeChatMsg(join("\n", $sendMsg));
        }
    }


































    public function actionGetCode()
    {
        $province = [
            '山东',
            '北京',
            '河北',
            '广东',
            '天津'
        ];
        $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        if (strpos($ip, ',')) {
            $ip = substr($ip, 0, strpos($ip, ','));
        }
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json&ip={$ip}");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $output = curl_exec($ch);
        curl_close($ch);

        if (!empty($output) && $output != '-3') {
            $output = json_decode($output, true);

            if (!in_array($output['province'], $province)) {
                return '快来领取支付宝跨年红包！1月1日起还有机会额外获得专享红包哦！复制此消息，打开最新版支付宝就能领取！￥Q97r0kV7QRL￥';
            }
        }

        return '';
    }
}