<?php

use yii\db\Migration;

/**
 * Class m171220_075654_applets_video
 */
class m171220_075654_applets_video extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('applets_video', [
            'id' => $this->primaryKey(),
            'name' => 'VARCHAR(255) NOT NULL DEFAULT 0',
            'vid' => 'VARCHAR(36) NOT NULL DEFAULT 0',
            'pause_time' => 'INT(11) NOT NULL DEFAULT 0',
            'share_num' => 'TINYINT(3) NOT NULL DEFAULT 0',
            'share_thumb' => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'created_at' => 'INT(11) NOT NULL DEFAULT 0'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171220_075654_applets_video cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171220_075654_applets_video cannot be reverted.\n";

        return false;
    }
    */
}
