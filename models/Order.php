<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mi_order".
 *
 * @property integer $order_id
 * @property string $order_no
 * @property string $order_date
 * @property integer $customer_id
 * @property integer $cart_id
 * @property integer $carrier_id
 * @property integer $payment_channel_id
 * @property integer $current_state
 * @property integer $flag_gift
 * @property string $gift_message
 * @property boolean $flag_free_delivery
 * @property integer $total_product_count
 * @property string $total_order
 * @property string $total_discount
 * @property string $total_tax
 * @property string $total_shipping_cost
 * @property string $total_shipping_tax
 * @property string $total_wrapping
 * @property string $grand_total
 * @property integer $round_mode
 * @property string $grand_total_rounded
 * @property string $total_paid
 * @property string $total_weight
 * @property string $delivery_no
 * @property string $delivery_date
 * @property integer $delivery_time_id
 * @property integer $delivery_address_id
 * @property string $tracking_no
 * @property string $invoice_no
 * @property string $invoice_date
 * @property integer $invoice_address_id
 * @property string $date_added
 * @property string $date_update
 *
 * @property MiCustomer $customer
 * @property MiDeliveryTime $deliveryTime
 * @property MiPaymentChannel $paymentChannel
 * @property MiOrderDetail[] $miOrderDetails
 * @property MiOrderReturn[] $miOrderReturns
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mi_order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_date', 'delivery_date', 'invoice_date', 'date_added', 'date_update'], 'safe'],
            [['customer_id', 'cart_id', 'carrier_id', 'payment_channel_id', 'current_state', 'flag_gift', 'total_product_count', 'round_mode', 'delivery_time_id', 'delivery_address_id', 'invoice_address_id'], 'integer'],
            [['flag_free_delivery'], 'boolean'],
            [['total_order', 'total_discount', 'total_tax', 'total_shipping_cost', 'total_shipping_tax', 'total_wrapping', 'grand_total', 'grand_total_rounded', 'total_paid', 'total_weight'], 'number'],
            [['order_no', 'delivery_no', 'invoice_no'], 'string', 'max' => 25],
            [['gift_message'], 'string', 'max' => 500],
            [['tracking_no'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'order_no' => 'Order No',
            'order_date' => 'Order Date',
            'customer_id' => 'Customer ID',
            'cart_id' => 'Cart ID',
            'carrier_id' => 'Carrier ID',
            'payment_channel_id' => 'Payment Channel ID',
            'current_state' => 'Current State',
            'flag_gift' => 'Flag Gift',
            'gift_message' => 'Gift Message',
            'flag_free_delivery' => 'Flag Free Delivery',
            'total_product_count' => 'Total Product Count',
            'total_order' => 'Total Order',
            'total_discount' => 'Total Discount',
            'total_tax' => 'Total Tax',
            'total_shipping_cost' => 'Total Shipping Cost',
            'total_shipping_tax' => 'Total Shipping Tax',
            'total_wrapping' => 'Total Wrapping',
            'grand_total' => 'Grand Total',
            'round_mode' => 'Round Mode',
            'grand_total_rounded' => 'Grand Total Rounded',
            'total_paid' => 'Total Paid',
            'total_weight' => 'Total Weight',
            'delivery_no' => 'Delivery No',
            'delivery_date' => 'Delivery Date',
            'delivery_time_id' => 'Delivery Time ID',
            'delivery_address_id' => 'Delivery Address ID',
            'tracking_no' => 'Tracking No',
            'invoice_no' => 'Invoice No',
            'invoice_date' => 'Invoice Date',
            'invoice_address_id' => 'Invoice Address ID',
            'date_added' => 'Date Added',
            'date_update' => 'Date Update',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(MiCustomer::className(), ['customer_id' => 'customer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDeliveryTime()
    {
        return $this->hasOne(MiDeliveryTime::className(), ['delivery_time_id' => 'delivery_time_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaymentChannel()
    {
        return $this->hasOne(MiPaymentChannel::className(), ['payment_channel_id' => 'payment_channel_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiOrderDetails()
    {
        return $this->hasMany(MiOrderDetail::className(), ['order_id' => 'order_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiOrderReturns()
    {
        return $this->hasMany(MiOrderReturn::className(), ['order_id' => 'order_id']);
    }
}
