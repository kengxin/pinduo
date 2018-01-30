<?php
namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

class GameLog extends ActiveRecord
{
    public static function tableName()
    {
        return 'game_log';
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

    public function closeGame($gameId, $currentNum)
    {
        $gameLog = $this->findOne($gameId);
        $gameInfo = GameInfo::findOne(['user_id' => Yii::$app->weixinUser->id]);
        if ($gameLog != null && $gameLog->closed_at == 0) {
            $gameLog->currentNumber = $currentNum;
            $gameLog->closed_at = time();

            if ($gameLog->currentNumber > $gameInfo->maxNumber) {
                $gameInfo->maxNumber = $gameLog->currentNumber;
            }

            if ($gameLog->currentNumber == 500) {
                // 插入信息
                $appletReward = new AppletReward();
                $appletReward->saveReward(Yii::$app->weixinUser->id);

                $gameInfo->completeNumber += 1;
            }

            if ($gameInfo->save() && $gameLog->save()) {
                return true;
            }
        }

        return false;
    }
}