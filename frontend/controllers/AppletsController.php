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
        file_put_contents('/tmp/post.log', $this->getJson());
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

    public function getJson()
    {
        $result = file_get_contents('php://input');

        return json_decode($result, true);
    }
}