<?php
namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class GroupLog extends ActiveRecord
{

    public static function tableName()
    {
        return 'groupLogs';
    }

    public function rules()
    {
        return [
            [['user_id', 'group_id'], 'required'],
            [['group_id'], 'string'],
            [['user_id', 'created_at'], 'integer']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => '用户Id',
            'group_id' => '群组Id',
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

    public function saveGroupLog($group_id)
    {
        $this->user_id = Yii::$app->weixinUser->id;
        $this->group_id = $group_id;

        if ($this->save()) {
            return GameInfo::addLastNumber($this->user_id, 1);
        }

        return false;
    }

    public function getLogExists($group_id)
    {
        return $this->find()
            ->where(['user_id' => Yii::$app->weixinUser->id, 'group_id' => $group_id])
            ->exists();
    }
}