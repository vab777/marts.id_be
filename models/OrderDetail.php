<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mi_order_detail".
 *
 * @property integer $order_detail_id
 * @property integer $order_id
 * @property integer $product_id
 * @property integer $qty_ordered
 * @property integer $qty_in_stock
 * @property integer $qty_refunded
 * @property integer $qty_returned
 * @property integer $product_group_id
 * @property string $product_group_price
 * @property integer $supplier_id
 * @property string $supplier_price
 * @property string $product_price
 * @property string $date_added
 * @property string $date_update
 *
 * @property MiOrder $order
 * @property MiProducts $product
 * @property MiProductGroup $productGroup
 * @property MiSupplier $supplier
 * @property MiOrderReturnDetail[] $miOrderReturnDetails
 */
class OrderDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mi_order_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'product_id', 'qty_ordered', 'qty_in_stock', 'qty_refunded', 'qty_returned', 'product_group_id', 'supplier_id'], 'integer'],
            [['product_group_price', 'supplier_price', 'product_price'], 'number'],
            [['date_added', 'date_update'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_detail_id' => 'Order Detail ID',
            'order_id' => 'Order ID',
            'product_id' => 'Product ID',
            'qty_ordered' => 'Qty Ordered',
            'qty_in_stock' => 'Qty In Stock',
            'qty_refunded' => 'Qty Refunded',
            'qty_returned' => 'Qty Returned',
            'product_group_id' => 'Product Group ID',
            'product_group_price' => 'Product Group Price',
            'supplier_id' => 'Supplier ID',
            'supplier_price' => 'Supplier Price',
            'product_price' => 'Product Price',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(MiProducts::className(), ['product_id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductGroup()
    {
        return $this->hasOne(MiProductGroup::className(), ['product_group_id' => 'product_group_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplier()
    {
        return $this->hasOne(MiSupplier::className(), ['supplier_id' => 'supplier_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiOrderReturnDetails()
    {
        return $this->hasMany(MiOrderReturnDetail::className(), ['order_detail_id' => 'order_detail_id']);
    }
}
