<?php

use yii\db\Migration;

/**
 * Class m180130_072858_create_applet_reward
 */
class m180130_072858_create_applet_reward extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('applet_reward', [
            'id' => $this->primaryKey(),
            'user_id' => 'INT(11) NOT NULL DEFAULT 0',
            'real_name' => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'tel' => 'INT(11) NOT NULL DEFAULT 0',
            'address' => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'express_id' => 'VARCHAR(32) NOT NULL DEFAULT ""',
            'status' => 'TINYINT(1) NOT NULL DEFAULT 0',
            'created_at' => 'INT(11) NOT NULL DEFAULT 0'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180130_072858_create_applet_reward cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180130_072858_create_applet_reward cannot be reverted.\n";

        return false;
    }
    */
}
