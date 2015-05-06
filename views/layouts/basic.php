<?php
use app\assets\AppAsset;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\bootstrap\Modal;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
/**
 * Created by PhpStorm.
 * User: phpNT
 * Date: 28.02.2015
 * Time: 1:48
 */
/* @var $content string
 * @var $this \yii\web\View */
AppAsset::register($this);
$this->beginPage();
?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <?php $this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1']); ?>
        <title><?= Yii::$app->name ?></title>
<<<<<<< HEAD
        <?echo Html::csrfMetaTags();?>
        <?php $this->head() ?>
=======
        <?php $this->head() ?>
        <?= Html::csrfMetaTags() ?>
>>>>>>> 4e2620c12da0a6fe3a4376af35b09e23e5476899
    </head>
    <body>
    <?php $this->beginBody(); ?>

    <div class="wrap">
        <?php
        NavBar::begin(
            [
                'options' => [
                    'class' => 'navbar',
                    'id' => 'main-menu'
                ],
                'renderInnerContainer' => true,
                'innerContainerOptions' => [
                    'class' => 'container'
                ],
                'brandLabel' => '<img src="img/brand.gif"/>',
                'brandUrl' => [
                    'main/index'
                ],
                'brandOptions' => [
                    'class' => 'navbar-brand'
                ]
            ]
        );
        ActiveForm::begin(
            [
                'action' => ['main/search'],
                'method' => 'get',
                'options' => [
                    'class' => 'navbar-form navbar-right'
                ]
            ]
        );
        echo '<div class="input-group input-group-sm">';
        echo Html::input(
            'type: text',
            'search',
            '',
            [
                'placeholder' => 'Найти ...',
                'class' => 'form-control'
            ]
        );
        echo '<span class="input-group-btn">';
        echo Html::submitButton(
            '<span class="glyphicon glyphicon-search"></span>',
            [
                'class' => 'btn btn-success'
            ]
        );
        echo '</span></div>';
        ActiveForm::end();

        echo Nav::widget([
            'items' => [
                [
                    'label' => 'Из коробки <span class="glyphicon glyphicon-inbox"></span>',
                    'items' => [
                        '<li class="dropdown-header">Расширения</li>',
                        '<li class="divider"></li>',
                        [
                            'label' => 'Перейти к просмотру',
                            'url' => ['widget-test/index']
                        ]
                    ]
                ],
                '<li>
                    <a data-toggle="modal" data-target="#modal" style="cursor: pointer">
                        О проекте <span class="glyphicon glyphicon-question-sign"></span>
                    </a>
                </li>',
                Yii::$app->user->isGuest ?
                    ['label' => 'Login', 'url' => ['/site/login']] :
                    ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                        'url' => ['/site/logout'],
                        'linkOptions' => ['data-method' => 'post']],
                [
                    'label' => 'ID=1',
                    'url' => Yii::$app->urlManager->createUrl(['main/user','id'=>1])
                ],

            ],
            'encodeLabels' => false,
            'options' => [
                'class' => 'navbar-nav navbar-right'
            ]
        ]);

        Modal::begin([
            'header' => '<h2>phpNT</h2>',
            'id' => 'modal'
        ]);
        echo 'Проект для продвинутых PHP разработчиков.';
        Modal::end();

        NavBar::end();
        ?>
        <div class="container">
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <span class="badge">
                <span class="glyphicon glyphicon-copyright-mark"></span> phpNT <?= date('Y') ?>
            </span>
<<<<<<< HEAD
=======

>>>>>>> 4e2620c12da0a6fe3a4376af35b09e23e5476899
        </div>
    </footer>

    <?php $this->endBody(); ?>
    </body>
    </html>
<?php
$this->endPage();