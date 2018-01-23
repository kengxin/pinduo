<?php

use yii\db\Migration;

/**
 * Class m180123_101628_create_prize
 */
class m180123_101628_create_prize extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('applet_prizes', [
            'id' => $this->primaryKey(),
            'name' => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'description' => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'img_url' => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'created_at' => 'INT(11) NOT NULL DEFAULT 0'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180123_101628_create_prize cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180123_101628_create_prize cannot be reverted.\n";

        return false;
    }
    */
}
