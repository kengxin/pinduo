<?php
namespace common\models\year;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

class YearGameLog extends ActiveRecord
{
    const STATUS_START = 0;

    const STATUS_SUCCESS = 1;

    const STATUS_ERROR = 2;

    public static function tableName()
    {
        return 'year_game_log';
    }

    public function rules()
    {
        return [
            [['user_id', 'status', 'current_num'], 'required'],
            [['user_id', 'status', 'current_num', 'closed_at', 'created_at'], 'integer']
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
        $this->status = self::STATUS_START;
        $this->current_num = 1;

        return $this->save();
    }

    public function closeGame($game_id, $current_num)
    {
        $log = $this->find()
            ->where(['id' => $game_id, 'user_id' => Yii::$app->yearUser->id])
            ->one();

        if (!empty($loga)) {
            if ($current_num == 10) {
                $log->status = self::STATUS_SUCCESS;
            } else {
                $log->status = self::STATUS_ERROR;
            }

            $log->closed_at = time();

            return $log->save();
        }

        return false;
    }
}