<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\msgs */

$this->title = 'Create Msgs';
$this->params['breadcrumbs'][] = ['label' => 'Msgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="msgs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
