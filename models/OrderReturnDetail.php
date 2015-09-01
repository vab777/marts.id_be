<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mi_order_return_detail".
 *
 * @property integer $order_return_id
 * @property integer $order_detail_id
 * @property integer $qty_returned
 *
 * @property MiOrderDetail $orderDetail
 */
class OrderReturnDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mi_order_return_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_return_id', 'order_detail_id'], 'required'],
            [['order_return_id', 'order_detail_id', 'qty_returned'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_return_id' => 'Order Return ID',
            'order_detail_id' => 'Order Detail ID',
            'qty_returned' => 'Qty Returned',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderDetail()
    {
        return $this->hasOne(MiOrderDetail::className(), ['order_detail_id' => 'order_detail_id']);
    }
}
