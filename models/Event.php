<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $is_repeat
 * @property int|null $is_blocking
 *
 * @property DayEvent[] $dayEvents
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string'],
            [['is_repeat', 'is_blocking'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'is_repeat' => 'Is Repeat',
            'is_blocking' => 'Is Blocking',
        ];
    }

    /**
     * Gets query for [[DayEvents]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDayEvents()
    {
        return $this->hasMany(DayEvent::className(), ['event_id' => 'id']);
    }
}
