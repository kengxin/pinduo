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
}