<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mi_country".
 *
 * @property integer $country_id
 * @property string $country_name
 *
 * @property MiAddress[] $miAddresses
 * @property MiProvince[] $miProvinces
 * @property MiSupplier[] $miSuppliers
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mi_country';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_name'], 'required'],
            [['flag_active'], 'boolean'],
            //[['date_added', 'date_update'], 'safe'],
            [['country_name'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'country_id' => 'Country ID',
            'country_name' => 'Country Name',
            //'flag_active' => 'Flag Active',
            //'date_added' => 'Date Added',
            //'date_update' => 'Date Update',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiAddresses()
    {
        return $this->hasMany(MiAddress::className(), ['country_id' => 'country_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiProvinces()
    {
        return $this->hasMany(MiProvince::className(), ['country_id' => 'country_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiSuppliers()
    {
        return $this->hasMany(MiSupplier::className(), ['country_id' => 'country_id']);
    }
}
