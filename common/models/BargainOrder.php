<?php
namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class BargainOrder extends ActiveRecord
{
    public static function tableName()
    {
        return 'bargain_order';
    }

    public function rules()
    {
        return [
            [['user_name', 'avatar', 'current_price'], 'required'],
            [['user_name', 'avatar'], 'string'],
            [['current_price', 'created_at'], 'integer']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_name' => '用户名',
            'avatar' => '用户头像',
            'current_price' => '当前价格',
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

    public function saveOrder($good_id, $user_name, $avatar)
    {
        $goodInfo = BargainGoods::findOne($good_id);

        if (empty($goodInfo)) {
            return false;
        }

        $this->good_id = $good_id;
        $this->user_name = $user_name;
        $this->avatar = $avatar;
        $this->current_price = $goodInfo->price;

        if ($this->save()) {
            return $this->id;
        }

        return false;
    }
}