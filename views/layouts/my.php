<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\Modal;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
  <header class="header">
      <!-- <div class="container"> -->
        <!-- <ul class="navbar-nav nav">
          <li class="active"><a href="/yii/basic/web/site/index">Главная</a></li>
          <li><a href="/yii/basic/web/site/about">О нас</a></li>
          <li><a href="/yii/basic/web/site/#">Лента новостей</a></li>
          <li><a href="/yii/basic/web/site/contact">Контакты</a></li>
          <li><a href="/yii/basic/web/site/login">Авторизация</a></li>
        </ul> -->

        <?php
        NavBar::begin([
            'brandLabel' => '',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar',
            ],
        ]);
        $menu = [
            ['label' => 'Главная', 'url' => ['/site/index']],
            ['label' => 'О нас', 'url' => ['/site/about']],
            ['label' => 'Лента новостей', 'url' => ['/site/news']],
            ['label' => 'Контакты', 'url' => ['#'], 'linkOptions' => ['data-toggle' => 'modal', 'data-target' => '#contact']],
            // '<li><a data-toggle="modal" data-target="#modal" style="cursor: pointer;">Контакты</a></li>',
            Yii::$app->user->isGuest ? (
                ['label' => 'Авторизация', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ];

        if (Yii::$app->user->isGuest) {
          $menu[] = ['label' => 'Авторизация', 'url' => ['/index/login']];
        }
        else {
          $menu[] = ['label' => 'Админ', 'url' => ['/index/admine']];
          $menu[] = ['label' => 'Выход', 'url' => ['/index/logout'],
          ];
        }

        echo Nav::widget([
            'options' => ['class' => 'navbar-nav'],
            'items' => $menu,
        ]);

        NavBar::end();
        ?>
      <!-- </div> -->
  </header>

  <?php
    Modal::begin([
        'header' => '',
        'id' => 'contact',
        // 'toggleButton' => ['label' => 'click me'],
    ]);

    echo '
      <ul class="modal-list">
        <li><span>телефон:</span><a href="tel:+7437857837"> +7437857837</a></li>
        <li><span>email:</span><span> mail@mail.ru</span></li>
        <li><span>fax:</span><a href="tel:+7437857837"> +7437857837</a></li>
        <li><span>адрес:</span><span> СПБ</span></li>
        <li></li>
      </ul>

    ';

    Modal::end();
  ?>

    <div class="container">
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">im footer</div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
