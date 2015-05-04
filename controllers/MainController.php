<?php
namespace app\controllers;

use Yii;
use app\models\LoginForm;

class MainController extends \yii\web\Controller
{
    public $layout = 'basic';
    public $defaultAction = 'index';

    public function actionIndex()
    {
        $hello = 'Привет МИР!!!';

        return $this->render(
            'index',
            [
                'hello' => $hello
            ]);
    }

    public function actionSearch($search = null)
    {
        return $this->render(
            'search',
            [
                'search' => $search
            ]
        );
    }
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goHome();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
