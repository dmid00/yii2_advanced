<?php
use yii\helpers\Html;

?>

<section class="fruit_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <hr>
            <h1>Welcome to our gallery</h1>
        </div>
    </div>
    <div class="container-fluid">
        <div class="fruit_container">
            <?php /** @var common\models\Gallerey $images_gallerey */
            foreach ($images_gallerey as $gallerey): ?>
                <div class="box">
                    <?= Html::img("@web/$gallerey->img") ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>