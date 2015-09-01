<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mi_customer".
 *
 * @property integer $customer_id
 * @property integer $cust_group_id
 * @property string $first_name
 * @property string $last_name
 * @property integer $salutation
 * @property integer $gender
 * @property string $email
 * @property string $password
 * @property string $last_password_gen
 * @property string $mobile_phone
 * @property string $birthday
 * @property boolean $flag_newsletter
 * @property string $ip_add_newsletter
 * @property string $note
 * @property string $last_visit
 * @property integer $status
 * @property boolean $flag_active
 *
 * @property MiAddress[] $miAddresses
 * @property MiOrder[] $miOrders
 * @property MiPaymentChannel[] $miPaymentChannels
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    
    //SALUTATION 
    const SALUTATION_MR = 1;
    const SALUTATION_MRS = 2;
    const SALUTATION_MS = 3;
    
    //GENDER
    const GENDER_MALE = 1;
    const GENDER_FEMALE = 2;
    
    //CUSTOMER GROUP
    const CUST_GROUP_GUEST = 1;
    const CUST_GROUP_BRONZE = 2;
    const CUST_GROUP_SILVER = 3;
    const CUST_GROUP_GOLD = 4;
    const CUST_GROUP_PLATINUM = 5;
    
    //CUSTOMER STATUS
    const CUST_STATUS_ACTIVE = 1;
    const CUST_STATUS_NOT_ACTIVE = 2;
    const CUST_STATUS_BANNED = 3;
    
    public static function tableName()
    {
        return 'mi_customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'gender', 'mobile_phone'], 'required'],
            [['cust_group_id', 'salutation', 'gender', 'status'], 'integer'],
            [['last_password_gen', 'birthday', 'date_added', 'date_update'], 'safe'],
            [['flag_newsletter', 'flag_active'], 'boolean'],
            [['first_name', 'last_name'], 'string', 'max' => 50],
            [['email', 'password'], 'string', 'max' => 100],
            [['mobile_phone'], 'string', 'max' => 15],
            [['ip_add_newsletter'], 'string', 'max' => 20],
            [['note'], 'string', 'max' => 500],
            [['last_visit'], 'string', 'max' => 45],
            [['mobile_phone'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'customer_id' => 'Customer ID',
            'cust_group_id' => 'Cust Group ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'salutation' => 'Salutation',
            'gender' => 'Gender',
            'email' => 'Email',
            'password' => 'Password',
            'last_password_gen' => 'Last Password Gen',
            'mobile_phone' => 'Mobile Phone',
            'birthday' => 'Birthday',
            'flag_newsletter' => 'Flag Newsletter',
            'ip_add_newsletter' => 'Ip Add Newsletter',
            'note' => 'Note',
            'last_visit' => 'Last Visit',
            'status' => 'Status',
            'flag_active' => 'Flag Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiAddresses()
    {
        return $this->hasMany(MiAddress::className(), ['customer_id' => 'customer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiOrders()
    {
        return $this->hasMany(MiOrder::className(), ['customer_id' => 'customer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiPaymentChannels()
    {
        return $this->hasMany(MiPaymentChannel::className(), ['customer_id' => 'customer_id']);
    }
    
    public function getCustGroupOptions()
    {
        return array(
            self::CUST_GROUP_GUEST => 'Guest',
            self::CUST_GROUP_BRONZE => 'Bronze Member',
            self::CUST_GROUP_SILVER => 'Silver Member',
            self::CUST_GROUP_GOLD => 'Gold Member',
            self::CUST_GROUP_PLATINUM => 'Platinum Member',
        );
    }
    
    public function getCustStatusOptions()
    {
        return array(
            self::CUST_STATUS_ACTIVE => 'Active',
            self::CUST_STATUS_NOT_ACTIVE => 'Not Active',
            self::CUST_STATUS_BANNED => 'Banned',
        );
    }
     
    public static function getStatusGroup($cust_status){
        if($cust_status != NULL)
        {
            return $cust_status==1 ? "Active":$cust_status==2 ? "Not Active":"Banned";
        }
        else
        {
            return $cust_status;
        }
    }
    
    public function getSalutationOptions()
    {
        return array(
            self::SALUTATION_MR => 'Mr.',
            self::SALUTATION_MRS => 'Mrs.',
            self::SALUTATION_MS => 'Ms.',
        );
    }
     
    public static function getSalutation($salutation){
        if($salutation != NULL)
        {
            return $salutation==1 ? "Mr.":$salutation==2 ? "Mrs.":"Ms.";
        }
        else
        {
            return $salutation;
        }
    }
     
    public function getGenderOptions()
    {
        return array(
            self::GENDER_MALE => 'Male',
            self::GENDER_FEMALE => 'Female',
        );
    }
     
    public static function getGender($gender){
        if($gender != NULL)
        {
            return $gender==1 ? "Male":"Female";
        }
        else
        {
            return $gender;
        }
    }
}
