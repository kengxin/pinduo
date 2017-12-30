<?php

use yii\db\Migration;

/**
 * Class m171230_080328_alert_bargain_goods
 */
class m171230_080328_alert_bargain_goods extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('bargain_goods', 'slide', 'TEXT');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171230_080328_alert_bargain_goods cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171230_080328_alert_bargain_goods cannot be reverted.\n";

        return false;
    }
    */
}
