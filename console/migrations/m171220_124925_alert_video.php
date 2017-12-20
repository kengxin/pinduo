<?php

use yii\db\Migration;

/**
 * Class m171220_124925_alert_video
 */
class m171220_124925_alert_video extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->dropColumn('applets_video', 'vid');
        $this->addColumn('applets_video', 'video_url', 'VARCHAR(255) NOT NULL DEFAULT ""');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171220_124925_alert_video cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171220_124925_alert_video cannot be reverted.\n";

        return false;
    }
    */
}
