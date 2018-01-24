<?php

use yii\db\Migration;

/**
 * Class m180124_022624_alert_group_log
 */
class m180124_022624_alert_group_log extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('groupLog', 'type', 'TINYINT(1) NOT NULL DEFAULT 0');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180124_022624_alert_group_log cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180124_022624_alert_group_log cannot be reverted.\n";

        return false;
    }
    */
}
