<?php

use yii\db\Migration;

/**
 * Class m180131_043848_year_question_log
 */
class m180131_043848_year_question_log extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('year_question_log', [
            'id' => $this->primaryKey(),
            'user_id' => 'INT(11) NOT NULL DEFAULT 0',
            'game_id' => 'INT(11) NOT NULL DEFAULT 0',
            'question_id' => 'INT(11) NOT NULL DEFAULT 0',
            'is_correct' => 'TINYINT(1) NOT NULL DEFAULT 0',
            'closed_at' => 'INT(11) NOT NULL DEFAULT 0',
            'created_at' => 'INT(11) NOT NULL DEFAULT 0'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180131_043848_year_question_log cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180131_043848_year_question_log cannot be reverted.\n";

        return false;
    }
    */
}
