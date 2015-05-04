<?php

namespace app\models;
use yii\db\ActiveRecord;
use yii\helpers\Security;

class User extends ActiveRecord implements \yii\web\IdentityInterface
{
    public static function tableName()
    {
        return 'users';
    }
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
        ];
    }
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }
    public function getId()
    {
        return $this->id;
    }
    public function getAuthKey()
    {
        return $this->auth_key;
    }
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }
    public function validatePassword($password)
    {
        return $this->password === $password;
    }

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

}
