<?php

namespace app\models;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\helpers\Security;
use yii\web\IdentityInterface;


use Yii;

/**
 * This is the model class for table "mi_employee".
 *
 * @property integer $employee_id
 * @property integer $position_id
 * @property string $first_name
 * @property string $last_name
 * @property integer $salutation
 * @property string $birthday
 * @property integer $gender
 * @property string $email
 * @property string $password
 * @property string $last_password_gen
 * @property string $mobile_phone
 * @property string $note
 * @property string $last_visit
 * @property integer $status
 * @property boolean $flag_active
 *
 * @property MiPosition $position
 */
class Employee extends \yii\db\ActiveRecord implements IdentityInterface
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
    
    //EMPLOYEE STATUS
    const EMPLOYEE_STATUS_ACTIVE = 1;
    const EMPLOYEE_STATUS_NOT_ACTIVE = 2;
    const EMPLOYEE_STATUS_BANNED = 3;
    
    public static function tableName()
    {
        return 'mi_employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['position_id', 'first_name', 'last_name', 'gender', 'mobile_phone'], 'required'],
            [['position_id', 'salutation', 'gender', 'status'], 'integer'],
            [['birthday', 'last_password_gen', 'last_visit', 'date_added', 'date_update'], 'safe'],
            [['flag_active'], 'boolean'],
            [['first_name', 'last_name'], 'string', 'max' => 50],
            [['email', 'password'], 'string', 'max' => 100],
            [['mobile_phone'], 'string', 'max' => 15],
            [['note'], 'string', 'max' => 500],
            [['mobile_phone'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'employee_id' => 'Employee ID',
            'position_id' => 'Position Name',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'salutation' => 'Salutation',
            'birthday' => 'Birthday',
            'gender' => 'Gender',
            'email' => 'Email',
            'password' => 'Password',
            'last_password_gen' => 'Last Password Gen',
            'mobile_phone' => 'Mobile Phone',
            'note' => 'Note',
            'last_visit' => 'Last Visit',
            'status' => 'Status',
            'flag_active' => 'Flag Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosition()
    {
        return $this->hasOne(Position::className(), ['position_id' => 'position_id']);
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
    
    public function getEmployeeStatusOptions()
    {
        return array(
            self::EMPLOYEE_STATUS_ACTIVE => 'Active',
            self::EMPLOYEE_STATUS_NOT_ACTIVE => 'Not Active',
            self::EMPLOYEE_STATUS_BANNED => 'Banned',
        );
    }
     
    public static function getEmployeeStatusGroup($employee_status){
        if($employee_status != NULL)
        {
            return $employee_status==1 ? "Active":$employee_status==2 ? "Not Active":"Banned";
        }
        else
        {
            return $employee_status;
        }
    }
    
    
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser());
        }
        return false;
    }
    
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = Employee::findByUsername($this->username);
        }

        return $this->_user;
    }
    
}
