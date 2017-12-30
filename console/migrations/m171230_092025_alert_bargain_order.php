<?php

use yii\db\Migration;

/**
 * Class m171230_092025_alert_bargain_order
 */
class m171230_092025_alert_bargain_order extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('bargain_order', 'good_id', 'INT(11) NOT NULL DEFAULT 0');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171230_092025_alert_bargain_order cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171230_092025_alert_bargain_order cannot be reverted.\n";

        return false;
    }
    */
}
