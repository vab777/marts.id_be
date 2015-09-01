<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mi_address".
 *
 * @property integer $address_id
 * @property integer $province_id
 * @property integer $country_id
 * @property integer $customer_id
 * @property integer $address_category
 * @property string $address_1
 * @property string $address_2
 * @property string $postcode
 * @property string $city
 * @property string $phone_1
 * @property string $phone_2
 * @property string $other
 * @property boolean $flag_active
 *
 * @property MiCountry $country
 * @property MiCustomer $customer
 * @property MiProvince $province
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mi_address';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['province_id', 'country_id', 'customer_id','address_1'], 'required'],
            [['province_id', 'country_id', 'customer_id', 'address_category'], 'integer'],
            [['flag_active'], 'boolean'],
            [['address_1', 'address_2'], 'string', 'max' => 100],
            [['postcode'], 'string', 'max' => 10],
            [['city'], 'string', 'max' => 50],
            [['phone_1', 'phone_2'], 'string', 'max' => 15],
            [['other'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'address_id' => 'Address ID',
            'province_id' => 'Province Name',
            'country_id' => 'Country Name',
            'customer_id' => 'Customer Name',
            'address_category' => 'Address Category',
            'address_1' => 'Address 1',
            'address_2' => 'Address 2',
            'postcode' => 'Postcode',
            'city' => 'City',
            'phone_1' => 'Phone 1',
            'phone_2' => 'Phone 2',
            'other' => 'Other',
            'flag_active' => 'Flag Active',
        ];
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
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['customer_id' => 'customer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvince()
    {
        return $this->hasOne(Province::className(), ['province_id' => 'province_id']);
    }
}
