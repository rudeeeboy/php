<?php
use yii\Helpers\Html;

/* @var $this yii\web\View
 * @var $hello string */

?>
<h1>main/index</h1>

<p>
    <?= $hello ?>
    <?= Html::a('Сообщения', ['msgs/index'], ['class'=>'btn btn-primary']);?>
</p>
