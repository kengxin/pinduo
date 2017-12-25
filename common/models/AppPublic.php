<?php
namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class AppPublic extends ActiveRecord
{
    public static function tableName()
    {
        return 'public';
    }

    public function rules()
    {
        return [
            [['app_name', 'app_id', 'app_secret'], 'required'],
            [['app_name', 'app_id', 'app_secret'], 'string'],
            [['created_at'], 'integer']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'app_name' => '名称',
            'app_id' => '小程序Id',
            'app_secret' => '小程序密钥',
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