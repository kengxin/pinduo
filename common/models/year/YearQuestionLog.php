<?php
namespace common\models\year;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class YearQuestionLog extends ActiveRecord
{
    const STATUS_START = 0;

    const STATUS_SUCCESS = 1;

    const STATUS_ERROR = 2;

    public static function tableName()
    {
        return 'year_question_log';
    }

    public function rules()
    {
        return [
            [['user_id', 'game_id', 'question_id', 'is_correct'], 'required'],
            [['user_id', 'game_id', 'question_id', 'is_correct', 'closed_at', 'created_at'], 'integer']
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

    public function getQuestion($game_id, $user_id, $current_num)
    {
        $this->user_id = $user_id;
        $this->game_id = $game_id;
        $this->is_correct = self::STATUS_START;

        if ($current_num <= 8) {
            // easy
            $questionInfo = YearQuestion::find()
                ->select(['id', 'question'])
                ->where(['in', 'level', [1, 2]])
                ->asArray()
                ->one();

            $answerInfo = YearAnswer::find()
                ->select(['id', 'answer'])
                ->where(['question_id' => $questionInfo->id])
                ->orderBy('is_correct DESC')
                ->asArray()
                ->all();

            $result = $questionInfo;
            $correctInfo = reset($answerInfo);

            unset($answerInfo[0]);
            shuffle($answerInfo);

            foreach ($answerInfo as $answer) {
                if (count($result['answer']) < 2) {
                    $result['answer'][] = $answer;
                }
            }

            array_push($result['answer'], $correctInfo);
        } else {
            $questionInfo = YearQuestion::find()
                ->select(['id', 'question'])
                ->where(['level' => 3])
                ->asArray()
                ->one();

            $answerInfo = YearAnswer::find()
                ->select(['id', 'answer'])
                ->where(['question_id' => $questionInfo->id])
                ->orderBy('is_correct ASC')
                ->asArray()
                ->all();

            $result = $questionInfo;
            $result['answer'] = $answerInfo;
        }


        $this->question_id = $result['id'];
        if ($this->save()) {
            return $result;
        }

        return false;
    }
}