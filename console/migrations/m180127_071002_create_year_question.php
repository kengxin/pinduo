<?php

use yii\db\Migration;

/**
 * Class m180127_071002_create_year_question
 */
class m180127_071002_create_year_question extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('year_question', [
            'id' => $this->primaryKey(),
            'question' => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'level' => 'TINYINT(1) NOT NULL DEFAULT 0',
            'created_at' => 'INT(11) NOT NULL DEFAULT 0'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180127_071002_create_year_question cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180127_071002_create_year_question cannot be reverted.\n";

        return false;
    }
    */
}
