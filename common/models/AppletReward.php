<?php
namespace common\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class AppletReward extends ActiveRecord
{
    const STATUS_OBTAIN = 0;

    const STATUS_RECEIVE  = 1;


    public static function tableName()
    {
        return 'applet_reward';
    }

    public function rules()
    {
        return [
            [['user_id', 'status'], 'required'],
            [['user_id', 'tel', 'status', 'created_at'], 'integer'],
            [['real_name', 'address', 'express_id'], 'string']
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

    public function saveReward($user_id)
    {
        $this->user_id = $user_id;
        $this->status = self::STATUS_OBTAIN;

        return $this->save();
    }

    public function saveOrder($real_name, $tel, $address)
    {
        $this->real_name = $real_name;
        $this->tel = $tel;
        $this->address = $address;
        $this->status = self::STATUS_RECEIVE;

        return $this->save();
    }

}