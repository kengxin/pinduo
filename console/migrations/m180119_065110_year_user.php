<?php

use yii\db\Migration;

/**
 * Class m180119_065110_weixinUser
 */
class m180119_065110_year_user extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('year_user', [
           'id' => $this->primaryKey(),
            'openid' => 'VARCHAR(32) NOT NULL DEFAULT ""',
            'unionid' => 'VARCHAR(32) NOT NULL DEFAULT ""',
            'nickName' => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'avatarUrl' => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'gender' => 'TINYINT(1) NOT NULL DEFAULT 0',
            'created_at' => 'INT(11) NOT NULL DEFAULT 0'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180119_065110_weixinUser cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180119_065110_weixinUser cannot be reverted.\n";

        return false;
    }
    */
}
