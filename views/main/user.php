<?

use yii\bootstrap\ActiveForm;
use yii\bootstrap\Button;
use yii\helpers\Html;

?>
<?
    echo Yii::$app->user->identity->username;
    echo Html::a('Сообщения', ['/msgs'], ['class'=>'btn btn-primary']);

?>
