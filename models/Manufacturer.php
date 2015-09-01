<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mi_manufacturer".
 *
 * @property integer $manufacturer_id
 * @property string $manufacturer_name
 * @property string $manufacturer_desc
 * @property boolean $flag_active
 *
 * @property MiProducts[] $miProducts
 */
class Manufacturer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mi_manufacturer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['manufacturer_name'], 'required'],
            [['flag_active'], 'boolean'],
            //[['date_added', 'date_update'], 'safe'],
            [['manufacturer_name'], 'string', 'max' => 50],
            [['manufacturer_desc'], 'string', 'max' => 500],
            [['manufacturer_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'manufacturer_id' => 'Manufacturer ID',
            'manufacturer_name' => 'Manufacturer Name',
            'manufacturer_desc' => 'Manufacturer Desc',
            'flag_active' => 'Flag Active'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiProducts()
    {
        return $this->hasMany(MiProducts::className(), ['manufacturer_id' => 'manufacturer_id']);
    }
}
