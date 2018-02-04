<?php
namespace common\models\year;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class YearGroupLog extends ActiveRecord
{
    public static function tableName()
    {
        return 'year_group_log';
    }

    public function rules()
    {
        return [
            [['user_id', 'group_id'], 'required'],
            [['user_id', 'created_at'], 'integer'],
            [['group_id'], 'string']
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

    public function saveLog($user_id, $group_id)
    {
        $this->user_id = $user_id;
        $this->group_id = $group_id;

        if ($this->save()) {
            return YearGame::addLastNumber($user_id, 1);
        }

        return false;
    }

    public function existsLog($user_id, $group_id)
    {
        return YearGroupLog::find()->where(['user_id' => $user_id, 'group_id' => $group_id])->exists();
    }
}