<?php
namespace app\models;

use app\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            ['username', 'filter', 'filter' => 'trim'],
//            ['username', 'required'],
//            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This username has already been taken.'],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This email address has already been taken.'],

            
            [['password'], 'required'],
            [['password'], 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        
        if ($this->validate()) {
            $user = new User();
            //$user->username = $this->username;
            $user->username = $this->email;
            $user->email = $this->email;
            $user->password_hash = $user->setPassword($this->password);
            $user->generateAuthKey();
            
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }
}
