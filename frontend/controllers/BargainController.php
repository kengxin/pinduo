<?php
namespace frontend\controllers;

use common\models\BargainOrder;
use Yii;
use yii\web\Controller;
use common\models\BargainGoods;

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

    public function actionJoin()
    {
        $good_id = intval(Yii::$app->request->post('good_id', 0));
        $user_name = Yii::$app->request->post('user_name', '');
        $avatar = Yii::$app->request->post('avatar', '');

        if (empty($good_id) || empty($user_name) || empty($avatar)) {
            return json_encode([
                'code' => -1,
                'msg' => '参数错误'
            ]);
        }

        $bargainOrder = new BargainOrder();
        $order_id = $bargainOrder->saveOrder($good_id, $user_name, $avatar);

        if ($order_id) {
            return json_encode([
                'code' => 0,
                'msg' => 'success',
                'data' => [
                    'order_id' => $order_id
                ]
            ]);
        }

        return json_encode([
            'code' => -1,
            'msg' => '系统错误'
        ]);
    }
}