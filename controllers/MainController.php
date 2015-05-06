<?php
namespace app\controllers;

use Yii;
<<<<<<< HEAD
=======
use app\models\LoginForm;
>>>>>>> 4e2620c12da0a6fe3a4376af35b09e23e5476899

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
<<<<<<< HEAD
    public function actionUser($id)
    {
        return $this->render(
            'user'
        );
    }
    public function actionMsgs()
    {
        return $this->render(
            'msgs'
        );
=======
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
>>>>>>> 4e2620c12da0a6fe3a4376af35b09e23e5476899
    }
}
