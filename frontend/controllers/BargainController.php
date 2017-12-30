<?php
namespace frontend\controllers;

use common\models\BargainGoods;
use yii\web\Controller;

class BargainController extends Controller
{
    public function actionGetGood($id)
    {
        $id = intval($id);
        $goodInfo = BargainGoods::find()
            ->filterWhere(['id' => $id])
            ->one();

        return json_encode([
            'code' => 0,
            'msg' => 'success',
            'data' => [
                'id' => $goodInfo->id,
                'name' => $goodInfo->name,
                'description' => $goodInfo->description,
                'slide' => explode('|', $goodInfo->slide),
                'price' => $goodInfo->price,
                'discount' => $goodInfo->discount,
                'content' => $goodInfo->content,
                'closed_at' => $goodInfo->closed_at
            ]
        ]);
    }
}