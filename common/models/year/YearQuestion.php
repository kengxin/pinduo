<?php
namespace common\models\year;

use yii\db\ActiveRecord;

class YearQuestion extends ActiveRecord
{
    public static function tableName()
    {
        return 'year_question';
    }

    public function rules()
    {
        return [
            [[]]
        ];
    }

    public function getAnswer()
    {
        return $this->hasMany(YearAnswer::className(), ['question_id' => 'id']);
    }

    public function getQuestionList()
    {
        $answerModel = new YearAnswer();

        $easyQuestion = YearQuestion::find()
            ->select(['id', 'question', 'level'])
            ->where(['in', 'level', [1, 2]])
            ->indexBy('id')
            ->asArray()
            ->limit(10)
            ->all();

        $questionIds = array_keys($easyQuestion);
        $easyAnswer = $answerModel->getAnswerList($questionIds, true);

        $questionList = [];
        foreach ($easyQuestion as $question) {
            shuffle($easyAnswer[$question['id']]);
            $questionList[] = [
                'question' => $question,
                'answer' => $easyAnswer[$question['id']]
            ];
        }

        return $questionList;
    }
}