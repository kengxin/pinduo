<?php
namespace common\models;

use Yii;
use yii\db\ActiveRecord;

class GameInfo extends ActiveRecord
{

    public static function tableName()
    {
        return 'gameInfo';
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

    public function createUser($user_id)
    {
        $this->user_id = $user_id;
        $this->lastNumber = 1;
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
        return GameInfo::updateAll(["lastNumber + $num"], "user_id = {$user_id}");
    }
}