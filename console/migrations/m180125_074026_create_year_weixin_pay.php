<?php

use yii\db\Migration;

/**
 * Class m180125_074026_create_weixin_pay
 */
class m180125_074026_create_year_weixin_pay extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('year_weixin_pay', [
            'id' => $this->primaryKey(),
            'status' => 'TINYINT(1) NOT NULL DEFAULT 0',
            'user_id' => 'INT(11) NOT NULL DEFAULT 0',
            'transaction_id' => 'VARCHAR(32) NOT NULL DEFAULT ""',
            'bank_type' => 'VARCHAR(16) NOT NULL DEFAULT ""',
            'info' => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'extra' => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'total_fee' => 'INT(11) NOT NULL DEFAULT 0',
            'created_at' => 'INT(11) NOT NULL DEFAULT 0'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180125_074026_create_weixin_pay cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180125_074026_create_weixin_pay cannot be reverted.\n";

        return false;
    }
    */
}
