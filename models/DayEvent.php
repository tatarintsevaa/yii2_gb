<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "day_event".
 *
 * @property int|null $event_id
 * @property int|null $day_id
 *
 * @property Day $day
 * @property Event $event
 */
class DayEvent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'day_event';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['event_id', 'day_id'], 'integer'],
            [['event_id'], 'exist', 'skipOnError' => true, 'targetClass' => Event::className(), 'targetAttribute' => ['event_id' => 'id']],
            [['day_id'], 'exist', 'skipOnError' => true, 'targetClass' => Day::className(), 'targetAttribute' => ['day_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'event_id' => 'Event ID',
            'day_id' => 'Day ID',
        ];
    }

    /**
     * Gets query for [[Day]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDay()
    {
        return $this->hasOne(Day::className(), ['id' => 'day_id']);
    }

    /**
     * Gets query for [[Event]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEvent()
    {
        return $this->hasOne(Event::className(), ['id' => 'event_id']);
    }
}
