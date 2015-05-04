<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsersQuery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-query-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'auth_key')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
