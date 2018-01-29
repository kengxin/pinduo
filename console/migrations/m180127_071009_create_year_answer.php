<?php

use yii\db\Migration;

/**
 * Class m180127_071009_create_year_answer
 */
class m180127_071009_create_year_answer extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('year_answer', [
            'id' => $this->primaryKey(),
            'answer' => 'VARCHAR(255) NOT NULL DEFAULT 0',
            'is_correct' => 'TINYINT(1) NOT NULL DEFAULT 0',
            'question_id' => 'INT(11) NOT NULL DEFAULT 0',
            'created_at' => 'INT(11) NOT NULL DEFAULT 0'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180127_071009_create_year_answer cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180127_071009_create_year_answer cannot be reverted.\n";

        return false;
    }
    */
}
