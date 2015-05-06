<?php

namespace app\models\traits;

use vova07\users\Module;
use Yii;

/**
 * Class ModuleTrait
 * @package vova07\users\traits
 * Implements `getModule` method, to receive current module instance.
 */
trait ModuleTrait
{
    private $_module;
    public function getModule()
    {
        if ($this->_module === null) {
            $module = Module::getInstance();
            if ($module instanceof Module) {
                $this->_module = $module;
            } else {
                $this->_module = Yii::$app->getModule('users');
            }
        }
        return $this->_module;
    }
}
