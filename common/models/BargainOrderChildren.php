<?php
namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class BargainOrderChildren extends ActiveRecord
{
    public static function tableName()
    {
        return 'bargain_order_children';
    }

    public function rules()
    {
        return [
            [['user_name', 'avatar', 'bargain_price', 'order_id'], 'required'],
            [['user_name', 'avatar'], 'string'],
            [['bargain_price', 'order_id', 'created_at'], 'integer']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_name' => '用户名',
            'avatar' => '用户头像',
            'bargain_price' => '砍掉价格',
            'order_id' => '所属订单',
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

    public function saveOrder($order_id, $user_name, $avatar)
    {
        $this->order_id = $order_id;
        $this->user_name = $user_name;
        $this->avatar = $avatar;
        $this->bargain_price = mt_rand(10000, 50000);

        if ($this->save()) {
            return $this->bargain_price;
        }

        return false;
    }
}