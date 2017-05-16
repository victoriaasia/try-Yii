<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>Заполните поля:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

    <p>
      <?= Html::label('Логин', 'login') ?>
      <?= Html::input('text', 'login', '', ['id' => 'login']) ?>
    </p>

    <p>
      <?= Html::label('Пароль', 'pass') ?>
      <?= Html::input('text', 'pass', '', ['id' => 'pass']) ?>
    </p>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Ок', [
                  'class' => 'btn btn-primary',
                  'name' => 'login-button'
                  ]) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

</div>
