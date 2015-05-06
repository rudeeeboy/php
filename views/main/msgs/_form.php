<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\msgs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="msgs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'from')->textInput() ?>

    <?= $form->field($model, 'to')->textInput() ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
