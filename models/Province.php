<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mi_province".
 *
 * @property integer $province_id
 * @property integer $country_id
 *
 * @property MiAddress[] $miAddresses
 * @property MiCountry $country
 * @property MiSupplier[] $miSuppliers
 */
class Province extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mi_province';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_id', 'province_name'], 'required'],
            [['country_id'], 'integer'],
            [['flag_active'], 'boolean'],
            [['date_added', 'date_update'], 'safe'],
            [['province_name'], 'string', 'max' => 32],
            [['province_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'province_id' => 'Province ID',
            'country_id' => 'Country Name',
            'province_name' => 'Province Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiAddresses()
    {
        return $this->hasMany(MiAddress::className(), ['province_id' => 'province_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['country_id' => 'country_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiSuppliers()
    {
        return $this->hasMany(MiSupplier::className(), ['province_id' => 'province_id']);
    }
}
