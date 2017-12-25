<?php

use yii\db\Migration;

/**
 * Class m171225_033041_alert_applets
 */
class m171225_033041_alert_applets extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('applets', 'public_id', 'INT(11) NOT NULL DEFAULT 0');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171225_033041_alert_applets cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171225_033041_alert_applets cannot be reverted.\n";

        return false;
    }
    */
}
