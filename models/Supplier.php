<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mi_supplier".
 *
 * @property integer $supplier_id
 * @property string $supplier_name
 * @property string $supplier_desc
 * @property string $contact_person
 * @property string $address_1
 * @property string $address_2
 * @property string $postcode
 * @property string $city
 * @property string $phone_1
 * @property string $phone_2
 * @property string $fax
 * @property integer $country_id
 * @property integer $province_id
 * @property string $logo_url
 * @property boolean $flag_active
 * @property string $date_added
 * @property string $date_update
 *
 * @property MiOrderDetail[] $miOrderDetails
 * @property MiCountry $country
 * @property MiProvince $province
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mi_supplier';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['supplier_name', 'country_id', 'province_id'], 'required'],
            [['country_id', 'province_id'], 'integer'],
            //[['flag_active'], 'boolean'],
            //[['date_added', 'date_update'], 'safe'],
            [['supplier_name'], 'string', 'max' => 45],
            [['supplier_desc', 'logo_url'], 'string', 'max' => 500],
            [['contact_person', 'city'], 'string', 'max' => 50],
            [['address_1', 'address_2'], 'string', 'max' => 100],
            [['postcode'], 'string', 'max' => 10],
            [['phone_1', 'phone_2'], 'string', 'max' => 15],
            [['fax'], 'string', 'max' => 20],
            [['supplier_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'supplier_id' => 'Supplier ID',
            'supplier_name' => 'Supplier Name',
            'supplier_desc' => 'Supplier Desc',
            'contact_person' => 'Contact Person',
            'address_1' => 'Address 1',
            'address_2' => 'Address 2',
            'postcode' => 'Postcode',
            'city' => 'City',
            'phone_1' => 'Phone 1',
            'phone_2' => 'Phone 2',
            'fax' => 'Fax',
            'country_id' => 'Country Name',
            'province_id' => 'Province Name',
            'logo_url' => 'Logo Url',
            //'flag_active' => 'Flag Active',
            //'date_added' => 'Date Added',
            //'date_update' => 'Date Update',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiOrderDetails()
    {
        return $this->hasMany(MiOrderDetail::className(), ['supplier_id' => 'supplier_id']);
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
    public function getProvince()
    {
        return $this->hasOne(Province::className(), ['province_id' => 'province_id']);
    }
}
