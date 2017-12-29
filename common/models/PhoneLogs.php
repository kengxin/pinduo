<?php
namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class PhoneLogs extends ActiveRecord
{
    public static function tableName()
    {
        return 'phone_logs';
    }

    public function rules()
    {
        return [
            [['info', 'send_ip'], 'required'],
            [['info', 'send_ip'], 'string']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'info' => '手机信息',
            'send_ip' => 'IP地址',
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

    public function saveLog($info)
    {
        $this->info = $info;
        $this->send_ip = empty(Yii::$app->request->getRemoteIP()) ? '0.0.0.0' : Yii::$app->request->getRemoteIP();

        return $this->save();
    }
}