<?php

namespace app\models;

use app\models\User;
use yii\base\Model;
use Yii;

class PasswordForm extends Model
{
    public $password;
    public $repassword;
    public $oldpassword;
    private $_user;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // Required
            [['password', 'repassword', 'oldpassword'], 'required'],
            // Trim
            [['password', 'repassword', 'oldpassword'], 'trim'],
            // String
            [['password', 'repassword', 'oldpassword'], 'string', 'min' => 6, 'max' => 30],
            // Password
            ['password', 'compare', 'compareAttribute' => 'oldpassword', 'operator' => '!=='],
            // Repassword
            ['repassword', 'compare', 'compareAttribute' => 'password'],
            // Oldpassword
            ['oldpassword', 'validateOldPassword']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'password' => 'ATTR_NEW_PASSWORD',
            'repassword' => 'ATTR_NEW_REPASSWORD',
            'oldpassword' => 'ATTR_OLDPASSWORD'
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     */
    public function validateOldPassword($attribute, $params)
    {
        $user = $this->user;
        if (!$user || !$user->validatePassword($this->$attribute)) {
            $this->addError($attribute, 'ERROR_MSG_INVALID_OLD_PASSWORD');
        }
    }

    /**
     * Change user password.
     *
     * @return boolean true if password was successfully changed
     */
    public function password()
    {
        if (($model = $this->user) !== null) {
            return $model->password($this->password);
        }
        return false;
    }

    /**
     * Finds user by id.
     *
     * @return User|null User instance
     */
    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = User::find()->where(['id' => Yii::$app->user->identity->id])->one();
        }
        return $this->_user;
    }
}
