<?php
namespace common\models\year;

use Yii;
use yii\db\ActiveRecord;

class YearGame extends ActiveRecord
{

    public static function tableName()
    {
        return 'year_info';
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
        return $this->hasOne(YearGame::className(), ['id' => 'user_id']);
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
        $gameInfo = YearGame::find()
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
}