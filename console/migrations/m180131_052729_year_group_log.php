<?php

use yii\db\Migration;

/**
 * Class m180131_052729_year_group_log
 */
class m180131_052729_year_group_log extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('year_group_id', [
            'id' => $this->primaryKey(),
            'user_id' => 'INT(11) NOT NULL DEFAULT 0',
            'group_id' => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'created_at' => 'INT(11) NOT NULL DEFAULT 0'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180131_052729_year_group_log cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180131_052729_year_group_log cannot be reverted.\n";

        return false;
    }
    */
}
