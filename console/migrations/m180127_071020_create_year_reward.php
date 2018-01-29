<?php

use yii\db\Migration;

/**
 * Class m180127_071020_create_year_reward
 */
class m180127_071020_create_year_reward extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('reward', [
            'id' => $this->primaryKey(),
            'user_id' => 'INT(11) NOT NULL DEFAULT 0',
            'price' => 'INT(11) NOT NULL DEFAULT 0',
            'type' => 'TINYINT(3) NOT NULL DEFAULT 0',
            'status' => 'TINYINT(1) NOT NULL DEFAULT 0',
            'created_at' => 'INT(11) NOT NULL DEFAULT 0'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180127_071020_create_year_reward cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180127_071020_create_year_reward cannot be reverted.\n";

        return false;
    }
    */
}
