<?php

use yii\db\Migration;

/**
 * Class m171220_061724_create_applets
 */
class m171220_061724_create_applets extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('applets', [
            'id' => $this->primaryKey(),
            'name' => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'app_id' => 'VARCHAR(18) NOT NULL DEFAULT ""',
            'app_secret' => 'VARCHAR(32) NOT NULL DEFAULT ""',
            'call_domain' => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'share_title' => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'share_description' => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'share_thumb' => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'share_url' => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'created_at' => 'INT(11) NOT NULL DEFAULT 0',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171220_061724_create_applets cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171220_061724_create_applets cannot be reverted.\n";

        return false;
    }
    */
}
