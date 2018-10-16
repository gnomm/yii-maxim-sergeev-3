<?php

use yii\db\Migration;

/**
 * Class m181016_130613_rename_columm_login_table_users
 */
class m181016_130613_rename_columm_login_table_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn("users", "login", "username");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181016_130613_rename_columm_login_table_users cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181016_130613_rename_columm_login_table_users cannot be reverted.\n";

        return false;
    }
    */
}
