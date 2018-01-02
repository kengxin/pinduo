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
//        $applet_id = intval($applet_id);
//        $appletInfo = Applets::findOne($applet_id);
//
//        if ($appletInfo == null) {
//            return json_encode([
//                'code' => -1
//            ]);
//        }

        return json_encode([
            'code' => 0,
            'data' => [
                'id' => $applet_id,
                'status' => $applet_id == 3 ? true : false
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

        return json_encode([
            'code' => 0,
            'msg' => 'success',
            'data' => [
                'video_id' => $video->id,
                'video_src' => $video->getVideoUrl($video->video_url),
                'video_name' => $video->name,
                'video_thumb' => $video->share_thumb,
                'video_pause' => $video->pause_time,
                'video_share' => $video->share_num,
                'video_list' => $video->getList(),
                'copy_info' => '123'
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

        return $phoneLogs->saveLog($phoneInfo);
    }


































    public function actionGetCode()
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json');
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $output = curl_exec($ch);

        curl_close($ch);

        if (!empty($output)) {
            $output = json_decode($output);
            if ($output['province'] != '山东') {
                return '快来领取支付宝跨年红包！1月1日起还有机会额外获得专享红包哦！复制此消息，打开最新版支付宝就能领取！x0igsW81PJ';
            }
        }

        return '';
    }
}