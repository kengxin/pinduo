<?php
namespace common\models;

use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

class GameLog extends ActiveRecord
{
    public static function tableName()
    {
        return 'gameLog';
    }

    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id', 'currentNumber', 'closed_at', 'created_at'], 'integer']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'Id',
            'user_id' => '用户Id',
            'currentNumber' => '当前数量',
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

    public function startGame($user_id)
    {
        $this->user_id = $user_id;
        $this->currentNumber = 0;

        return $this->save();
    }
}