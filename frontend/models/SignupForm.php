<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $fname;
    public $lname;
	
    public $mi;
    public $parents_email;
    public $add_street;
    public $add_city;
 	public $add_country;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['fname', 'required'],
            ['lname', 'required'],
            ['mi', 'required'],
            ['parents_email', 'required'],
            ['add_street', 'required'],
            ['add_city', 'required'],
            ['add_country', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
		$user-> fname = $this->fname;
		$user -> lname = $this->lname;
		$user -> mi = $this->mi;
		
		$user -> parents_email = $this->parents_email;
		$user -> add_street = $this->add_street;
		$user -> add_city = $this->add_city;
		$user -> add_country = $this->add_country;
		
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}
