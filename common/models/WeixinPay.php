<?php
namespace common\models;

use Yii;
use common\components\WeixinPay as Pay;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class WeixinPay extends ActiveRecord
{

    const STATUS_WAIT = 0;

    const STATUS_SUCCESS = 1;

    public static function tableName()
    {
        return 'weixin_pay';
    }

    public function rules()
    {
        return [
            [['user_id', 'total_fee', 'status', 'info', 'extra'], 'required'],
            [['user_id', 'status', 'transaction_id', 'total_fee', 'created_at'], 'integer'],
            [['bank_type', 'info', 'extra'], 'string']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'Id',
            'user_id' => 'UserId',
            'status' => '当前状态',
            'transaction_id' => '微信订单Id',
            'bank_type' => '支付银行',
            'info' => '支付信息',
            'extra' => '扩展信息',
            'total_fee' => '总计金额',
            'created_at' => '创建时间'
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at']
                ],
            ],
        ];
    }

    public function startPay($info, $total_fee, $extra)
    {
        $this->user_id = Yii::$app->weixinUser->id;
        $this->status = self::STATUS_WAIT;
        $this->info = $info;
        $this->extra = json_encode($extra);
        $this->total_fee = $total_fee;

        if ($this->save()) {
            return Yii::$app->weixinPay->pay(Yii::$app->weixinUser->getOpenId(), $this->id + 10000, $info, $total_fee);
        }

        return false;
    }

    public function setSuccess($bank_type, $transaction_id)
    {
        if ($this->status == self::STATUS_WAIT) {
            $this->bank_type = $bank_type;
            $this->transaction_id = $transaction_id;
            $this->status = self::STATUS_SUCCESS;

            return $this->save();
        }

        return false;
    }
}