<?php

namespace app\controllers;
use Yii;
use app\models\LoginForm;
use app\models\User;

class IndexController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionNews()
    {
        return $this->render('news');
    }

    public function actionLogin()
    {

      if (!Yii::$app->user->isGuest) {
        return $this->goHome();
      }

      
        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
          if($model->login())
            return $this->goBack();
          else {
            Yii::$app->session->setFlash('error', 'ERROR');
            Yii::error('Register error');
            return $this->refresh();
          }
        }
        return $this->render('login', ['model' => $model]);
    }

    public function actionLogout() {
      Yii::$app->user->logout();
      return $this->goHome();
    }


}
