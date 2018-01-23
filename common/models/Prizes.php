<?php
namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class Prizes extends ActiveRecord
{

    public static function tableName()
    {
        return 'applets_prizes';
    }

    public function rules()
    {
        return [
            [['name', 'description', 'img_url'], 'required'],
            [['name', 'description', 'img_url'], 'string'],
            [['created_at'], 'integer']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名字',
            'description' => '描述',
            'img_url' => '图片地址',
            'created_at' => '分享时间'
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

    public function getPrizesList()
    {
        return $this->find()
            ->select(['name', 'description', 'img_url'])
            ->orderBy('id ASC')
            ->asArray()
            ->all();
    }
}