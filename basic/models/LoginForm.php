<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property-read User|null $user This property is read-only.
 *
 */
class LoginForm extends Model
{
    public $email;
    public $password;
    public $rememberMe = true;

    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['email', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
            //['password', 'authenticate'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect email or password.');
            }
        }
    }

    /**
     * Logs in a user using the provided email and password.
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            if ($this->getuser()!=NULL) {
                return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
            }
        }
        return false;
    }

    /**
     * Finds user by [[email]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->email);
        }

        return $this->_user;
    }

    /**

     * Authenticates the password.

     * This is the 'authenticate' validator as declared in rules().

     */
/*
    public function authenticate($attribute,$params)

    {

        $this->_identity= new User($this->email,$this->password);

                if(!$this->_identity->authenticate()) 
                {

                   $failedCount = Yii::app()->user->hasState('loginFailed') ?  Yii::app()->user->getState('loginFailed') : 0;    
                   $failedCount++;

                   Yii::app()->user->setState('loginFailed',$failedCount);

                   if($failedCount>5) 

                   {            
                    $this->addError('password','Incorrect username or password.');

                     //reset for the next 5 attempts

                     //Yii::app()->user->setState('loginFailed',0);    

                    } 

                }

                else

                  if(Yii::app()->user->hasState('loginFailed'))

                      Yii::app()->user->setState('loginFailed',null); //remove from session of login ok   

    }*/
}
