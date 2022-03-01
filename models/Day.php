<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "day".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $day_off
 *
 * @property DayEvent[] $dayEvents
 */
class Day extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'day';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string'],
            [['day_off'], 'integer'],
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
            'day_off' => 'Day Off',
        ];
    }

    /**
     * Gets query for [[DayEvents]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDayEvents()
    {
        return $this->hasMany(DayEvent::className(), ['day_id' => 'id']);
    }
}
