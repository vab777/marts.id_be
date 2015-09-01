<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mi_payment_channel".
 *
 * @property integer $payment_channel_id
 * @property string $payment_channel_name
 * @property integer $customer_id
 * @property integer $payment_category
 * @property integer $cc_type
 * @property string $cc_no
 * @property string $cvv
 * @property integer $exp_month
 * @property integer $exp_year
 * @property string $paypal_id
 * @property boolean $flag_active
 *
 * @property MiOrder[] $miOrders
 * @property MiCustomer $customer
 */
class PaymentChannel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    
    //PAYMENT CATEGORY 
    const PAYMENT_CATEGORY_COD = 1;
    const PAYMENT_CATEGORY_BANK_TRANSFER = 2;
    const PAYMENT_CATEGORY_CREDIT_CARD = 3;
    const PAYMENT_CATEGORY_PAYPAL = 4;
    const PAYMENT_CATEGORY_OTHER_PG = 5;
    const PAYMENT_CATEGORY_WALLET = 6;
    const PAYMENT_CATEGORY_MATAPAY = 7;
    
    //CC TYPE
    const CCTYPE_VISA = 1;
    const CCTYPE_MASTER_CARD = 2;
    
    public static function tableName()
    {
        return 'mi_payment_channel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['payment_channel_name','customer_id'], 'required'],
            [['payment_channel_name'], 'string', 'max' => 50],
            [['customer_id', 'payment_category', 'cc_type', 'exp_month', 'exp_year'], 'integer'],
            [['flag_active'], 'boolean'],
            //[['date_added', 'date_update'], 'safe'],
            [['cc_no'], 'string', 'max' => 16],
            [['cvv'], 'string', 'max' => 3],
            [['paypal_id'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'payment_channel_id' => 'Payment Channel ID',
            'payment_channel_name' => 'Payment Channel Name',
            'customer_id' => 'Customer Name',
            'payment_category' => 'Payment Category',
            'cc_type' => 'Cc Type',
            'cc_no' => 'Cc No',
            'cvv' => 'Cvv',
            'exp_month' => 'Exp Month',
            'exp_year' => 'Exp Year',
            'paypal_id' => 'Paypal ID',
            'flag_active' => 'Flag Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiOrders()
    {
        return $this->hasMany(MiOrder::className(), ['payment_channel_id' => 'payment_channel_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['customer_id' => 'customer_id']);
    }
    
    public static function getPaymentCategory($payment_category){
        if($payment_category != NULL)
        {
            return $payment_category==1 ? "COD":$payment_category==2 ? "Bank Transfer":$payment_category==3 ? "Credit Card":$payment_category==4 ? "Paypal":$payment_category==5 ? "Other PG":$payment_category==6 ? "Wallet":"Matapay";
        }
        else
        {
            return $payment_category;
        }
    }
    
    public static function getCCType($cc_type){
        if($cc_type != NULL)
        {
            return $cc_type==1 ? "VISA":"Master Card";
        }
        else
        {
            return $cc_type;
        }
    }
    
    public function getCCTypeOptions()
    {
        return array(
            self::CCTYPE_VISA => 'VISA',
            self::CCTYPE_MASTER_CARD => 'Master Card',
        );
    }
    
    public function getPaymentCategoryOptions()
    {
        return array(
            self::PAYMENT_CATEGORY_COD => 'COD',
            self::PAYMENT_CATEGORY_BANK_TRANSFER => 'Bank Transfer',
            self::PAYMENT_CATEGORY_CREDIT_CARD => 'Credit Card',
            self::PAYMENT_CATEGORY_PAYPAL => 'Paypal',
            self::PAYMENT_CATEGORY_OTHER_PG => 'Other PG',
            self::PAYMENT_CATEGORY_WALLET => 'Wallet',
            self::PAYMENT_CATEGORY_MATAPAY => 'Matapay',
        );
    }
}
