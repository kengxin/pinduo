<?php
namespace frontend\controllers;

use common\models\Applets;
use common\models\BargainOrder;
use common\models\BargainOrderChildren;
use Yii;
use yii\web\Controller;
use common\models\BargainGoods;
use yii\web\NotFoundHttpException;

class BargainController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionGetStatus($applet_id)
    {
        $applet_id = intval($applet_id);
        $appletInfo = Applets::findOne($applet_id);

        if ($appletInfo == null) {
            return json_encode([
                'code' => -1
            ]);
        }

//        return json_encode([
//            'code' => 0,
//            'data' => [
//                'id' => $appletInfo->id,
//                'status' => boolval($appletInfo->status)
//            ]
//        ]);
    }

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
                'closed_at' => $goodInfo->closed_at,
                'ad_status' => false
            ]
        ]);
    }

    public function actionGetOrderInfo($id)
    {
        $id = intval($id);
        if (($orderInfo = BargainOrder::find()->where(['id' => $id])->asArray()->one()) == null){
            return json_encode([
                'code' => -1,
                'msg' => 'error'
            ]);
        }

        $childrenList = BargainOrderChildren::find()
            ->where(['order_id' => $orderInfo['id']])
            ->select(['user_name', 'avatar', 'bargain_price', 'created_at'])
            ->limit(10)
            ->orderBy('id DESC')
            ->asArray()
            ->all();

        foreach ($childrenList as $k => $v) {
            $childrenList[$k]['bargain_price'] = $childrenList[$k]['bargain_price'] / 100;
            $childrenList[$k]['created_at'] = date('Y-m-d H:i:s', $v['created_at']);
        }

        return json_encode([
            'code' => 0,
            'msg' => 'ok',
            'data' => [
                'orderInfo' => $orderInfo,
                'childrenList' => $childrenList
            ]
        ]);
    }

    public function actionHelpUser()
    {
        $result = $this->getRequestContent();
        if (empty($result['good_id']) || empty($result['order_id']) || empty($result['user_name']) || empty($result['avatar'])) {
            return json_encode([
                'code' => -1,
                'msg' => '参数错误'
            ]);
        }

        $bargainOrder = new BargainOrderChildren();
        $bargain_price = $bargainOrder->saveOrder($result['good_id'], $result['order_id'], $result['user_name'], $result['avatar']);

        if ($bargain_price) {
            return json_encode([
                'code' => 0,
                'msg' => 'success',
                'data' => [
                    'bargain_price' => $bargain_price
                ]
            ]);
        }

        return json_encode([
            'code' => -1,
            'msg' => 'error'
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

    public function event()
    {
        $openId = Yii::$app->request->get('openid', false);
        if (!$openId) {
            return false;
        }

        return $this->applet->sendMessage($this->applet->getSendLinkJson($openId));
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