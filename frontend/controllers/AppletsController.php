<?php
namespace frontend\controllers;

use common\models\Applets;
use common\models\AppletsVideo;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use Xiang\WechatApp\Decode\WXBizDataCrypt;

class AppletsController extends Controller
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

    public function actionGetGroupId()
    {
        $appId = Yii::$app->request->post('app_id');
        $encryptedData = Yii::$app->request->post('encryptedData');
        $iv = Yii::$app->request->post('iv');
    }

    public function actionGetVideo()
    {
        $vid = Yii::$app->request->get('vid', null);
        if (($video = AppletsVideo::find()->filterWhere(['vid' => $vid])->one()) == null) {
            return json_encode([
                'code' => -1
            ]);
        }

        return json_encode([
            'name' => $video->name,
            'video_url' => $video->getVideoUrl(),
            'pause_time' => $video->pause_time,
            'share_num' => $video->share_num,
            'share_thumb' => $video->share_thumb
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
}