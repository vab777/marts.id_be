<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mi_product_image".
 *
 * @property integer $product_image_id
 * @property integer $product_id
 * @property string $thumb_url
 * @property string $mid_size_url
 * @property string $ori_size_url
 * @property boolean $flag_cover
 * @property integer $position
 * @property boolean $flag_active
 * @property string $date_added
 * @property string $date_update
 *
 * @property MiProducts $product
 */
class ProductImage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mi_product_image';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id'], 'required'],
            [['product_id', 'position'], 'integer'],
            [['flag_cover', 'flag_active'], 'boolean'],
            [['date_added', 'date_update'], 'safe'],
            [['thumb_url', 'mid_size_url', 'ori_size_url'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_image_id' => 'Product Image ID',
            'product_id' => 'Product Name',
            'thumb_url' => 'Thumb Url',
            'mid_size_url' => 'Mid Size Url',
            'ori_size_url' => 'Ori Size Url',
            'flag_cover' => 'Flag Cover',
            'position' => 'Position',
            'flag_active' => 'Flag Active',
            'date_added' => 'Date Added',
            'date_update' => 'Date Update',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['product_id' => 'product_id']);
    }
}
