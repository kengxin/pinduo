<?php

use yii\db\Migration;

/**
 * Class m171230_072234_bargin_goods
 */
class m171230_072234_bargin_goods extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('bargain_goods', [
            'id' => $this->primaryKey(),
            'name' => 'VARCHAR(255) NOT NULL DEFAULT 0',
            'description' => 'VARCHAR(255) NOT NULL DEFAULT 0',
            'price' => 'INT(11) NOT NULL DEFAULT 0',
            'discount' => 'INT(11) NOT NULL DEFAULT 0',
            'content' => 'TEXT',
            'closed_at' => 'INT(11) NOT NULL DEFAULT 0',
            'created_at' => 'INT(11) NOT NULL DEFAULT 0'
        ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8mb4');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171230_072234_bargin_goods cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171230_072234_bargin_goods cannot be reverted.\n";

        return false;
    }
    */
}
