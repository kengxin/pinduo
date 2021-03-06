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
        header("Access-Control-Allow-Origin: *");
        $dataProvider = new ActiveDataProvider([
            'query' => PhoneLogs::find(),
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ]
            ]
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