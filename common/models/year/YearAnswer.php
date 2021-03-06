<?php
namespace common\models\year;

use yii\db\ActiveRecord;

class YearAnswer extends ActiveRecord
{
    const STATUS_ERROR = 0;

    const STATUS_SUCCESS = 1;

    public static function tableName()
    {
        return 'year_answer';
    }

    public function rules()
    {
        return [
            [[]]
        ];
    }

    public function getAnswerList($questionIds, $is_correct = true)
    {
        $answerList = YearAnswer::find()
            ->select(['id', 'answer', 'is_correct', 'question_id'])
            ->where(['in', 'question_id', $questionIds])
            ->orderBy('is_correct DESC')
            ->indexBy('id')
            ->asArray()
            ->all();

        $result = [];
        foreach ($answerList as $answer) {
            $answer['id'] = intval($answer['id']);
            $answer['is_correct'] = boolval($answer['is_correct']);
            $answer['question_id'] = intval($answer['question_id']);

            if (!isset($result[$answer['question_id']]) || count($result[$answer['question_id']]) < 4) {
                if ($answer['is_correct'] == 1) {
                    if ($is_correct == true) {
                        $result[$answer['question_id']][] = $answer;
                    }
                } else {
                    $result[$answer['question_id']][] = $answer;
                }
            }
        }

        return $result;
    }
}