<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
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
      <div class="container">
        <ul class="navbar-nav nav">
          <li class="active"><a href="/yii/basic/web/site/index">Главная</a></li>
          <li><a href="/yii/basic/web/site/about">О нас</a></li>
          <li><a href="/yii/basic/web/site/#">Лента новостей</a></li>
          <li><a href="/yii/basic/web/site/contact">Контакты</a></li>
          <li><a href="/yii/basic/web/site/login">Авторизация</a></li>
        </ul>
      </div>
  </header>

    <div class="container">
        <!-- <?= $content ?> -->
        im main block
    </div>
</div>

<footer class="footer">
    <div class="container">im footer</div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
