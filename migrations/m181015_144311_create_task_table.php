<?php

use yii\db\Migration;

/**
 * Handles the creation of table `task`.
 */
class m181015_144311_create_task_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('task', [
            'id' => $this->primaryKey(),
            'name_id' => $this->integer()->notNull(),
            'task' => $this->string(128)->notNull(),
            'description' => $this->string(1024)->notNull(),
            'created' => $this->dateTime()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('task');
    }
}
