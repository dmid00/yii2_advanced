<?php

use common\models\Category;
use common\models\Setting;
use frontend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
$navbars = Category::find()->all();
$settings = Setting::find()->one();
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
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
        <div class="brand_box">
            <a class="navbar-brand" href="http://potashkin.dvizh.net">
                <span><?= $settings->namesite ?></span>
            </a>
        </div>
    </div>
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
    <section class="nav_section">
        <div class="container">
            <div class="custom_nav2">
                <nav class="navbar navbar-expand custom_nav-container ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex  flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <?php /** @var common\models\Category $navbars */
                                foreach ($navbars as $navbar): ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= $navbar->url ?>"><?= $navbar->name ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </section>
    <?= $content ?>
    <section class="info_section layout_padding">
        <div class="container">
            <div class="info_logo">
                <h2><?= $settings->namesite ?></h2>
            </div>
            <div class="info_contact">
                <div class="row">
                    <div class="col-md-4">
                        <a href="">
                            <img src="images/location.png" alt="">
                            <span><?= $settings->location ?></span>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="">
                            <img src="images/call.png" alt="">
                            <span> <?= $settings->phone ?> </span>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="">
                            <img src="images/mail.png" alt="">
                            <span><?= $settings->email ?></span>
                        </a>
                    </div>
                </div>
            </div>
    </section>
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