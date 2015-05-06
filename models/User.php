<?php

namespace app\models;
<<<<<<< HEAD
use Yii;
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%users}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'email', 'auth_key', 'password_reset_token'], 'required'],
            [['username', 'password', 'email'], 'string', 'max' => 45],
            [['auth_key'], 'string', 'max' => 32],
            [['password_reset_token'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
=======
use yii\db\ActiveRecord;
use yii\helpers\Security;

class User extends ActiveRecord implements \yii\web\IdentityInterface
{
    public static function tableName()
    {
        return 'users';
    }
>>>>>>> 4e2620c12da0a6fe3a4376af35b09e23e5476899
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
<<<<<<< HEAD
            'auth_key' => 'Auth Key',
            'password_reset_token' => 'Password Reset Token',
        ];
    }
    /** INCLUDE USER LOGIN VALIDATION FUNCTIONS**/
    /**
     * @inheritdoc
     */
=======
        ];
    }
>>>>>>> 4e2620c12da0a6fe3a4376af35b09e23e5476899
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }
<<<<<<< HEAD

    /**
     * @inheritdoc
     */
    /* modified */
=======
>>>>>>> 4e2620c12da0a6fe3a4376af35b09e23e5476899
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }
<<<<<<< HEAD

    /* removed
        public static function findIdentityByAccessToken($token)
        {
            throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
        }
    */
    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    /**
     * Finds user by password reset token
     *
     * @param  string      $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        $expire = \Yii::$app->params['user.passwordResetTokenExpire'];
        $parts = explode('_', $token);
        $timestamp = (int) end($parts);
        if ($timestamp + $expire < time()) {
            // token expired
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token
        ]);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
=======
    public function getId()
    {
        return $this->id;
    }
>>>>>>> 4e2620c12da0a6fe3a4376af35b09e23e5476899
    public function getAuthKey()
    {
        return $this->auth_key;
    }
<<<<<<< HEAD

    /**
     * @inheritdoc
     */
=======
>>>>>>> 4e2620c12da0a6fe3a4376af35b09e23e5476899
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }
<<<<<<< HEAD

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
=======
>>>>>>> 4e2620c12da0a6fe3a4376af35b09e23e5476899
    public function validatePassword($password)
    {
        return $this->password === $password;
    }

<<<<<<< HEAD
    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Security::generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Security::generateRandomKey();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Security::generateRandomKey() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }
    /** EXTENSION MOVIE **/
=======
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function password($password)
    {
        $this->setPassword($password);
        return $this->save(false);
    }

>>>>>>> 4e2620c12da0a6fe3a4376af35b09e23e5476899
}
