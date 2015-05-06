<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UsersQuery */

$this->title = 'Create Users Query';
$this->params['breadcrumbs'][] = ['label' => 'Users Queries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-query-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
