<?php

/* @var $this yii\web\View */
use yii\bootstrap\Carousel;

$this->title = 'My Yii Application';
?>
<div class="site-index">

  <?php

  echo Carousel::widget([
      'items' => [
          // the item contains only the image
          '<img src="http://localhost/yii/basic/web/image/1.jpg"/>',

          '<img src="https://s-media-cache-ak0.pinimg.com/736x/17/eb/b6/17ebb60d13b8eba3cb0b9cd15b7b9449.jpg"/>',

          '<img src="https://s-media-cache-ak0.pinimg.com/736x/77/d6/47/77d647502bd6414a7971ec3e4bd95ed1.jpg"/>',

          '<img src="https://brushstrokesstudio.com/anita-mosher/images/abstract/large-image5.jpg"/>',
        ],

          'options' => ['data-interval' => '5000'],
          'controls' => [
              '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>',
              '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>'
          ],

      ]);

  ?>

</div>
