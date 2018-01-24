<?php
namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class GroupLog extends ActiveRecord
{

    const TYPE_JOIN = 0;

    const TYPE_SHARE = 1;

    public static function tableName()
    {
        return 'groupLogs';
    }

    public function rules()
    {
        return [
            [['user_id', 'group_id', 'type'], 'required'],
            [['group_id'], 'string'],
            [['user_id', 'type', 'created_at'], 'integer']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => '类型',
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

    public function saveGroupLog($group_id, $type, $saveLastNumber = false)
    {
        $this->type = $type;
        $this->user_id = Yii::$app->weixinUser->id;
        $this->group_id = $group_id;

        if ($this->save()) {
            if ($saveLastNumber) {
                return GameInfo::addLastNumber($this->user_id, 1);
            } else {
                return true;
            }
        }

        return false;
    }

    public function getLogExists($group_id, $type)
    {
        return $this->find()
            ->where(['user_id' => Yii::$app->weixinUser->id, 'group_id' => $group_id, 'type' => $type])
            ->exists();
    }

    public function getGroupUsers()
    {
        $groupIds = GroupLog::find()
            ->select(['group_id'])
            ->where(['user_id' => Yii::$app->weixinUser->id])
            ->groupBy('group_id')
            ->asArray()
            ->column();

        if (!empty($groupIds)) {
            return GroupLog::find()
                ->select(['user_id'])
                ->where(['in', 'group_id', $groupIds])
                ->groupBy('user_id')
                ->asArray()
                ->column();
        }

        return [];
    }
}