<?php

use yii\db\Migration;

/**
 * Class m171229_024829_phone_logs
 */
class m171229_024829_phone_logs extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('phone_logs', [
            'id' => $this->primaryKey(),
            'info' => 'TEXT',
            'send_ip' => 'VARCHAR(20) NOT NULL DEFAULT ""',
            'created_at' => 'INT(11) NOT NULL DEFAULT 0'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171229_024829_phone_logs cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171229_024829_phone_logs cannot be reverted.\n";

        return false;
    }
    */
}
