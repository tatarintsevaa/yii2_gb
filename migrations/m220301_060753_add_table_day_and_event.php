<?php

use yii\db\Migration;

/**
 * Class m220301_060753_add_table_day_and_event
 */
class m220301_060753_add_table_day_and_event extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('event', [
            'id' => $this->primaryKey(),
            'name' => $this->text(),
            'is_repeat' => $this->boolean(),
            'is_blocking' => $this->boolean(),
        ]);

        $this->createTable('day', [
            'id' => $this->primaryKey(),
            'name' => $this->text(),
            'day_off' => $this->boolean(),
        ]);

        $this->createTable('day_event', [
            'event_id' => $this->integer(),
            'day_id' => $this->integer()
        ]);

        $this->addForeignKey(
            'day_event_event_id',
            'day_event',
            'event_id',
            'event',
            'id'
        );

        $this->addForeignKey(
            'day_event_day_id',
            'day_event',
            'day_id',
            'day',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220301_060753_add_table_day_and_event cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220301_060753_add_table_day_and_event cannot be reverted.\n";

        return false;
    }
    */
}
