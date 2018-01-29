<?php

use yii\db\Migration;

/**
 * Class m180119_104535_create_user_game
 */
class m180119_104535_create_year_game extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('year_info', [
            'id' => $this->primaryKey(),
            'user_id' => 'INT(11) NOT NULL DEFAULT 0',
            'lastNumber' => 'INT(11) NOT NULL DEFAULT 0',
            'playNumber' => 'INT(11) NOT NULL DEFAULT 0',
            'completeNumber' => 'INT(11) NOT NULL DEFAULT 0',
            'maxNumber' => 'INT(11) NOT NULL DEFAULT 0'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180119_104535_create_user_game cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180119_104535_create_user_game cannot be reverted.\n";

        return false;
    }
    */
}
