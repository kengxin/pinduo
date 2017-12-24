<?php

use yii\db\Migration;

/**
 * Class m171224_143316_alert_applets
 */
class m171224_143316_alert_applets extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('applets', 'status', 'TINYINT(1) NOT NULL DEFAULT 0');
        $this->addColumn('applets', 'is_redirect', 'TINYINT(1) NOT NULL DEFAULT 0');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171224_143316_alert_applets cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171224_143316_alert_applets cannot be reverted.\n";

        return false;
    }
    */
}
