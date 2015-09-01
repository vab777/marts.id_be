<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mi_delivery_time".
 *
 * @property integer $delivery_time_id
 * @property string $delivery_time_range
 * @property boolean $flag_peak_hour
 * @property string $conversion_rate
 *
 * @property MiOrder[] $miOrders
 */
class DeliveryTime extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mi_delivery_time';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['delivery_time_range'], 'required'],
            [['flag_peak_hour'], 'boolean'],
            [['conversion_rate'], 'number'],
            [['delivery_time_range'], 'string', 'max' => 20],
            [['delivery_time_range'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'delivery_time_id' => 'Delivery Time ID',
            'delivery_time_range' => 'Delivery Time Range',
            'flag_peak_hour' => 'Flag Peak Hour',
            'conversion_rate' => 'Conversion Rate',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiOrders()
    {
        return $this->hasMany(MiOrder::className(), ['delivery_time_id' => 'delivery_time_id']);
    }
}
