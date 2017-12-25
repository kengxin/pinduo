<?php
namespace frontend\controllers;

use common\models\Applets;
use common\models\AppletsVideo;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

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
        $id = Yii::$app->request->get('id', null);
        $applet_id = Yii::$app->request->get('applet_id', null);
        if (($video = AppletsVideo::find()->filterWhere(['id' => $id])->one()) == null) {
            return json_encode([
                'code' => -1
            ]);
        }
        $appletInfo = Applets::find()->where(['id' => $applet_id])->one();
        if (isset($appletInfo->is_redirect) && $appletInfo->is_redirect == 1) {
            $redirectInfo = Applets::find()->where(['public_id' => $appletInfo->public_id])->one();
        }

        $videoList = AppletsVideo::find()
            ->select(['id', 'name'])
            ->where(['!=', 'id', $video->id])
            ->limit(2)
            ->asArray()
            ->all();

        return json_encode([
            'id' => $video->id,
            'name' => $video->name,
            'video_url' => $video->video_url,
            'pause_time' => $video->pause_time,
            'share_num' => $video->share_num,
            'share_thumb' => $video->share_thumb,
            'video_list' => $videoList,
            'status' => isset($appletInfo->status) ? $appletInfo->status : null,
            'redirect' => [
                'app_id' => isset($redirectInfo->app_id) ? $redirectInfo->app_id : '',
                'is_redirect' => isset($appletInfo->is_redirect) ? $appletInfo->is_redirect : null,
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
        return '【支付宝】年终红包再加10亿！12月24日还有机会获得圣诞惊喜红包！长按复制此消息，打开最新版支付宝就能领取！6nCbVx77QB';
    }
}