<?php
namespace frontend\controllers;

use common\models\BargainOrder;
use Yii;
use yii\web\Controller;
use common\models\BargainGoods;

class BargainController extends Controller
{
    public $enableCsrfValidation = false;

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
        $result = $this->getRequestContent();
        if (empty($result['good_id']) || empty($result['user_name']) || empty($result['avatar'])) {
            return json_encode([
                'code' => -1,
                'msg' => '参数错误'
            ]);
        }
var_dump($result);die;
        $bargainOrder = new BargainOrder();
        $order_id = $bargainOrder->saveOrder($result['good_id'], $result['user_name'], $result['avatar']);

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

    public function getRequestContent()
    {
        $result = file_get_contents('php://input');
        if (!empty($result)) {
            $result = json_decode($result, true);

            return $result;
        }

        return false;
    }
}