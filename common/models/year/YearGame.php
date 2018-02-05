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
        return $this->hasOne(YearUser::className(), ['id' => 'user_id'])->select(['id', 'avatarUrl', 'nickName']);
    }

    public function createUser($user_id)
    {
        $this->user_id = $user_id;
        $this->lastNumber = 100000;
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

    public function getRankList()
    {
        $rankList = YearGame::find()
            ->select(['user_id', 'completeNumber'])
            ->joinWith('weixinUser')
            ->orderBy('completeNumber DESC')
            ->asArray()
            ->limit(6)
            ->all();

        foreach ($rankList as $k => $v) {
            $rankList[$k]['price'] = $v['completeNumber'] * 50;
            $rankList[$k]['user_id'] = intval($rankList[$k]['user_id']);
            $rankList[$k]['completeNumber'] = intval($v['completeNumber']);
            $rankList[$k]['weixinUser']['id'] = intval($rankList[$k]['weixinUser']['id']);
        }

        return $rankList;
    }

    public static function addLastNumber($user_id, $num)
    {
        if (($gameInfo = YearGame::findOne(['user_id' => $user_id])) !== null) {
            $gameInfo->lastNumber += $num;

            return $gameInfo->save();
        }

        return false;
    }
}