<?php
namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class BargainGoods extends ActiveRecord
{
    public static function tableName()
    {
        return 'bargain_goods';
    }

    public function rules()
    {
        return [
            [['name', 'description', 'slide', 'content', 'price', 'discount', 'closed_at'], 'required'],
            [['name', 'description', 'slide', 'content'], 'string'],
            [['price', 'discount', 'closed_at', 'created_at'], 'integer']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '商品名',
            'description' => '描述',
            'slide' => '轮播图',
            'content' => '内容',
            'price' => '原价',
            'discount' => '底价',
            'closed_at' => '结束时间',
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
}