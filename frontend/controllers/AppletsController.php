<?php
namespace frontend\controllers;

use common\models\Applets;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class AppletsController extends Controller
{
    public $applet = null;
    public $enableCsrfValidation = false;

    public function actionConfig()
    {
        $serverInfo = parse_url($_SERVER['SERVER_NAME']);
        if (!isset($serverInfo['host'])) {
            throw new NotFoundHttpException();
        }

        if (($this->applet = Applets::findOne(['call_domain' => $serverInfo['host']])) == null) {
            throw new NotFoundHttpException();
        }

        if (!Yii::$app->request->isPost) {
            return $this->applet->checkSignature();
        }

        return $this->event();
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