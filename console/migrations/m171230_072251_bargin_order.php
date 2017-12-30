<?php

use yii\db\Migration;

/**
 * Class m171230_072251_bargin_order
 */
class m171230_072251_bargin_order extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('bargain_order', [
            'id' => $this->primaryKey(),
            'user_name' => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'avatar' => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'current_price' => 'INT(11) NOT NULL DEFAULT 0',
            'created_at' => 'INT(11) NOT NULL DEFAULT 0'
        ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8mb4');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171230_072251_bargin_order cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171230_072251_bargin_order cannot be reverted.\n";

        return false;
    }
    */
}
