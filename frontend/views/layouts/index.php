<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<html>
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    </head>
<body>
<?php $this->beginBody() ?>
<div class="hero_area">
    <section class=" slider_section position-relative">
        <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="img-box">
                        <img src="images/slider-img.jpg" alt="">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="img-box">
                        <img src="images/slider-img.jpg" alt="">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="img-box">
                        <img src="images/slider-img.jpg" alt="">
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
</div>
<?= $content ?>>
<section class="container-fluid footer_section ">
    <p>
        &copy; <span id="displayYear"></span> All Rights Reserved. Design by
        <a href="https://html.design/">Free Html Templates</a>
    </p>
</section>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();