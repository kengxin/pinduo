<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use common\models\PhoneLogs;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

class PhoneLogsController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => PhoneLogs::find()
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function findModel($id)
    {
        if (($model = PhoneLogs::findOne($id)) == null) {
            throw new NotFoundHttpException();
        }

        return $model;
    }
}