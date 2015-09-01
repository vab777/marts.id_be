<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mi_order_return".
 *
 * @property integer $order_return_id
 * @property integer $order_id
 * @property string $return_date
 * @property integer $return_state
 * @property string $notes
 * @property string $date_added
 * @property string $date_update
 *
 * @property MiOrder $order
 */
class OrderReturn extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mi_order_return';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id'], 'required'],
            [['order_id', 'return_state'], 'integer'],
            [['return_date', 'date_added', 'date_update'], 'safe'],
            [['notes'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_return_id' => 'Order Return ID',
            'order_id' => 'Order ID',
            'return_date' => 'Return Date',
            'return_state' => 'Return State',
            'notes' => 'Notes',
            'date_added' => 'Date Added',
            'date_update' => 'Date Update',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(MiOrder::className(), ['order_id' => 'order_id']);
    }
}
