<?php
namespace common\models;

use Yii;
use yii\db\ActiveRecord;

class GameInfo extends ActiveRecord
{

    public static function tableName()
    {
        return 'game_info';
    }

    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id', 'lastNumber', 'playNumber', 'completeNumber', 'maxNumber'], 'integer']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => '用户Id',
            'lastNumber' => '可挑战次数',
            'playNumber' => '已挑战次数',
            'completeNumber' => '成功次数',
            'maxNumber' => '最大写道'
        ];
    }

    public function getWeixinUser()
    {
        return $this->hasOne(WeixinUser::className(), ['id' => 'user_id'])->select(['id', 'avatarUrl', 'nickName']);
    }

    public function createUser($user_id)
    {
        $this->user_id = $user_id;
        $this->lastNumber = 1000000;
        $this->playNumber = 0;
        $this->completeNumber = 0;
        $this->maxNumber = 0;

        return $this->save();
    }

    public function getGameInfo($user_id)
    {
        $gameInfo = GameInfo::find()
            ->select(['lastNumber', 'playNumber', 'completeNumber', 'maxNumber'])
            ->where(['user_id' => $user_id])
            ->asArray()
            ->one();

        if (empty($gameInfo)) {
            $this->createUser($user_id);

            return [
                'lastNumber' => intval($this->lastNumber),
                'playNumber' => intval($this->playNumber),
                'completeNumber' => intval($this->completeNumber),
                'maxNumber' => intval($this->maxNumber)
            ];
        }

        return $gameInfo;
    }

    public static function addLastNumber($user_id, $num)
    {
        if (($gameInfo = GameInfo::findOne(['user_id' => $user_id])) !== null) {
            $gameInfo->lastNumber += $num;

            return $gameInfo->save();
        }

        return false;
    }

    public function getIqRand()
    {
        $gameList = GameInfo::find()
            ->joinWith('weixinUser')
            ->orderBy('completeNumber DESC')
            ->asArray()
            ->limit(5)
            ->all();

        return $gameList;
    }

    public function getResolveRank()
    {
        $gameList = GameInfo::find()
            ->joinWith('weixinUser')
            ->orderBy('playNumber DESC')
            ->asArray()
            ->limit(5)
            ->all();

        return $gameList;
    }

    public function getGroupRank()
    {
        $groupLog = new GroupLog();
        $userIds = $groupLog->getGroupUsers();

        return $this->find()
            ->joinWith('weixinUser')
            ->where(['in', 'user_id', $userIds])
            ->orderBy('maxNumber DESC')
            ->asArray()
            ->all();
    }
}