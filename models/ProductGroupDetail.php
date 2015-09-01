<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mi_product_group_detail".
 *
 * @property integer $product_group_detail_id
 * @property integer $product_group_id
 * @property integer $product_id
 * @property integer $product_qty
 * @property string $product_ori_price
 * @property string $product_group_price
 *
 * @property MiProducts $product
 * @property MiProductGroup $productGroup
 */
class ProductGroupDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mi_product_group_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_group_id', 'product_id', 'product_qty'], 'required'],
            [['product_group_id', 'product_id', 'product_qty'], 'integer'],
            [['product_ori_price', 'product_group_price'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_group_detail_id' => 'Product Group Detail ID',
            'product_group_id' => 'Product Group Description',
            'product_id' => 'Product Name',
            'product_qty' => 'Product Qty',
            'product_ori_price' => 'Product Ori Price',
            'product_group_price' => 'Product Group Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['product_id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductGroup()
    {
        return $this->hasOne(ProductGroup::className(), ['product_group_id' => 'product_group_id']);
    }
}
