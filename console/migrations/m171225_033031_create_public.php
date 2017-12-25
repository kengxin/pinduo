<?php

use yii\db\Migration;

/**
 * Class m171225_033031_create_public
 */
class m171225_033031_create_public extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('public', [
            'id' => $this->primaryKey(),
            'app_name' => 'VARCHAR(64) NOT NULL DEFAULT ""',
            'app_id' => 'VARCHAR(32) NOT NULL DEFAULT ""',
            'app_secret' => 'VARCHAR(32) NOT NULL DEFAULT ""',
            'created_at' => 'INT(11) NOT NULL DEFAULT 0'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171225_033031_create_public cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171225_033031_create_public cannot be reverted.\n";

        return false;
    }
    */
}
