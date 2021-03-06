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

        $questionIds = YearQuestionLog::find()
            ->select(['question_id'])
            ->where(['game_id' => $game_id])
            ->indexBy('question_id')
            ->column();

        if ($current_num <= 8) {
            // easy
            $questionInfo = YearQuestion::find()
                ->select(['id', 'question'])
                ->where(['in', 'level', [1, 2]])
                ->andFilterWhere(['not in', 'id', $questionIds])
                ->asArray()
                ->orderBy('rand()')
                ->one();

            $answerInfo = YearAnswer::find()
                ->select(['id', 'answer'])
                ->where(['question_id' => $questionInfo['id']])
                ->orderBy('is_correct DESC')
                ->asArray()
                ->all();

            $result = $questionInfo;
            $correctInfo = reset($answerInfo);

            unset($answerInfo[0]);
            shuffle($answerInfo);

            $result['answer'] = [];
            foreach ($answerInfo as $answer) {
                if (count($result['answer']) < 3) {
                    $result['answer'][] = $answer;
                }
            }

            array_push($result['answer'], $correctInfo);
            shuffle($answerInfo);
        } else {
            $questionInfo = YearQuestion::find()
                ->select(['id', 'question'])
                ->where(['level' => 3])
                ->andFilterWhere(['not in', 'id', $questionIds])
                ->orderBy('rand()')
                ->asArray()
                ->one();

            $answerInfo = YearAnswer::find()
                ->select(['id', 'answer'])
                ->where(['question_id' => $questionInfo['id']])
                ->orderBy('is_correct' . (mt_rand(0, 100) == 88 ? 'ASC' : 'DESC'))
                ->limit(4)
                ->asArray()
                ->all();

            $result = $questionInfo;
            $result['answer'] = $answerInfo;
        }


        $this->question_id = $result['id'];
        if ($this->save()) {

            $result['id'] = intval($result['id']);
            foreach ($result['answer'] as $k => $v) {
                $result['answer'][$k]['id'] = intval($v['id']);
            }

            shuffle($result['answer']);

            return $result;
        }

        return false;
    }
}