<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mi_product_group".
 *
 * @property integer $product_group_id
 * @property string $product_group_desc
 * @property integer $total_product
 * @property string $total_price
 * @property string $total_discount
 * @property boolean $flag_active
 *
 * @property MiOrderDetail[] $miOrderDetails
 * @property MiProductGroupDetail[] $miProductGroupDetails
 */
class ProductGroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mi_product_group';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_group_desc'], 'required'],
            [['total_product'], 'integer'],
            [['total_price', 'total_discount'], 'number'],
            [['flag_active'], 'boolean'],
            //[['date_added', 'date_update'], 'safe'],
            [['product_group_desc'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_group_id' => 'Product Group ID',
            'product_group_desc' => 'Product Group Desc',
            'total_product' => 'Total Product',
            'total_price' => 'Total Price',
            'total_discount' => 'Total Discount',
            'flag_active' => 'Flag Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiOrderDetails()
    {
        return $this->hasMany(MiOrderDetail::className(), ['product_group_id' => 'product_group_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiProductGroupDetails()
    {
        return $this->hasMany(MiProductGroupDetail::className(), ['product_group_id' => 'product_group_id']);
    }
}
