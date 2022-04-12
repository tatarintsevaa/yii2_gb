<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%event}}`.
 */
class m220403_074005_add_column_to_event_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('event', 'created_at', $this->dateTime());
        $this->addColumn('event', 'updated_at', $this->dateTime());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('event', 'created_at');
        $this->dropColumn('event', 'updated_at');
    }
}
