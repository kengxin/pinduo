<?php
namespace frontend\controllers;

use common\models\Applets;
use common\models\AppletsVideo;
use Yii;
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
                'id' => $appletInfo->id,
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
                'video_list' => $video->getList()
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

    public function actionGetCode()
    {
        return '';
    }
}