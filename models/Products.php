<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mi_products".
 *
 * @property integer $product_id
 * @property integer $category_id
 * @property integer $manufacturer_id
 * @property string $product_name
 * @property string $upc_barcode
 * @property string $ean13_barcode
 * @property integer $qty
 * @property integer $min_qty
 * @property string $price
 * @property string $wholesale_price
 * @property integer $visibility
 * @property string $prod_short_desc
 * @property string $prod_long_desc
 * @property string $weight
 * @property string $width
 * @property string $height
 * @property string $depth
 * @property string $additional_shipping_cost
 * @property boolean $flag_active
 * @property boolean $flag_onsale
 * @property boolean $flag_visible
 * @property boolean $flag_show_price
 * @property boolean $flag_available
 * @property string $available_date
 * @property integer $qty_onsale
 * @property integer $size_id
 * @property string $size
 * @property string $reduction_price
 * @property boolean $flag_reduction
 * @property integer $reduction_type
 *
 * @property MiOrderDetail[] $miOrderDetails
 * @property MiProductGroupDetail[] $miProductGroupDetails
 * @property MiProductImage[] $miProductImages
 * @property MiProductTag[] $miProductTags
 * @property MiTag[] $tags
 * @property MiCategory $category
 * @property MiManufacturer $manufacturer
 * @property MiSize $size
 */
class Products extends \yii\db\ActiveRecord
{
    //REDUCTION TYPE
    const REDUCTION_TYPE_PRICE = 1;
    const REDUCTION_TYPE_PERCENTAGE = 2;
    
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mi_products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'manufacturer_id', 'product_name', 'size_id'], 'required'],
            [['category_id', 'manufacturer_id', 'qty', 'min_qty', 'visibility', 'qty_onsale', 'size_id', 'reduction_type'], 'integer'],
            [['price', 'wholesale_price', 'weight', 'width', 'height', 'depth', 'additional_shipping_cost', 'reduction_price'], 'number'],
            [['flag_active', 'flag_onsale', 'flag_visible', 'flag_show_price', 'flag_available', 'flag_reduction'], 'boolean'],
            [['available_date', 'reduction_start_date', 'reduction_end_date', 'date_added', 'date_update'], 'safe'],
            [['product_name'], 'string', 'max' => 100],
            [['upc_barcode'], 'string', 'max' => 12],
            [['ean13_barcode'], 'string', 'max' => 13],
            [['prod_short_desc'], 'string', 'max' => 200],
            [['prod_long_desc'], 'string', 'max' => 500],
            [['size'], 'string', 'max' => 16]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'category_id' => 'Category Name',
            'manufacturer_id' => 'Manufacturer Name',
            'product_name' => 'Product Name',
            'upc_barcode' => 'Upc Barcode',
            'ean13_barcode' => 'Ean13 Barcode',
            'qty' => 'Qty',
            'min_qty' => 'Min Qty',
            'price' => 'Price',
            'wholesale_price' => 'Wholesale Price',
            'visibility' => 'Visibility',
            'prod_short_desc' => 'Prod Short Desc',
            'prod_long_desc' => 'Prod Long Desc',
            'weight' => 'Weight',
            'width' => 'Width',
            'height' => 'Height',
            'depth' => 'Depth',
            'additional_shipping_cost' => 'Additional Shipping Cost',
            'flag_active' => 'Flag Active',
            'flag_onsale' => 'Flag Onsale',
            'flag_visible' => 'Flag Visible',
            'flag_show_price' => 'Flag Show Price',
            'flag_available' => 'Flag Available',
            'available_date' => 'Available Date',
            'qty_onsale' => 'Qty Onsale',
            'size_id' => 'Size Name',
            'size' => 'Size',
            'reduction_price' => 'Reduction Price',
            'reduction_start_date' => 'Reduction Start Date',
            'reduction_end_date' => 'Reduction End Date',
            'flag_reduction' => 'Flag Reduction',
            'reduction_type' => 'Reduction Type',
            'date_added' => 'Date Added',
            'date_update' => 'Date Update',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiOrderDetails()
    {
        return $this->hasMany(MiOrderDetail::className(), ['product_id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiProductGroupDetails()
    {
        return $this->hasMany(MiProductGroupDetail::className(), ['product_id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiProductImages()
    {
        return $this->hasMany(MiProductImage::className(), ['product_id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiProductTags()
    {
        return $this->hasMany(MiProductTag::className(), ['product_id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTags()
    {
        return $this->hasMany(MiTag::className(), ['tag_id' => 'tag_id'])->viaTable('mi_product_tag', ['product_id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['category_id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManufacturer()
    {
        return $this->hasOne(Manufacturer::className(), ['manufacturer_id' => 'manufacturer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    
    public function getReductionTypeOptions()
    {
        return array(
            self::REDUCTION_TYPE_PRICE => 'Price',
            self::REDUCTION_TYPE_PERCENTAGE => 'Percentage',
        );
    }
    
    public static function getReductionType($reduction_type){
        if($reduction_type != NULL)
        {
            return $reduction_type==1 ? "Price":"Percentage";
        }
        else
        {
            return $reduction_type;
        }
    }
    
    
}
