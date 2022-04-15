<?php

use yii\db\Migration;

/**
 * Class m220415_044330_create_table_user
 */
class m220415_044330_create_table_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username' => $this->text()->notNull(),
            'password' => $this->text()->notNull(),
            'auth_key' => $this->text()->notNull(),
            'accessToken' => $this->text()->notNull(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }

}
