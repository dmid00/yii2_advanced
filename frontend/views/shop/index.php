<?php

/** @var yii\web\View $this */
/** @var common\models\setting $settings */
/** @var FeedbackForm $model */
/** @var yii\bootstrap5\ActiveForm $form */

use common\models\FeedbackForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap5\ActiveForm;
use yii\widgets\MaskedInput;

$this->title = $settings->namesite;

?>

<section class="shop_section layout_padding">
    <div class="container">
        <div class="box">
            <div class="detail-box">
                <h1><?= $settings->selection1 ?></h1>
            </div>
        </div>
    </div>
</section>
<section class="about_section">
    <div class="container-fluid">
        <div class="row">
            <?php /** @var common\models\About $abouts */
            foreach ($abouts as $about): ?>
                <div class="col-md-6 px-0">
                    <div class="img-box">
                        <?= Html::img("@web/$about->img")?>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="detail-box">
                        <div class="heading_container">
                            <hr>
                            <h2><?= $about->tittle ?></h2>
                        </div>
                        <p><?= $about->description ?></p>
                        <a href="<?= Url::to(['url', 'id' =>$about->id]) ?>">Read More</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="fruit_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <hr>
            <h2><?= $settings->selection3 ?></h2>
        </div>
    </div>
    <div class="container-fluid">

        <div class="fruit_container">
            <?php /** @var common\models\Ourfruit $fruits */
            foreach ($fruits as $fruit): ?>
                <div class="box">
                    <?= Html::img("@web/$fruit->img") ?>
                    <div class="link_box">
                        <h5> <?= $fruit->name ?> </h5>
                        <a href="<?= Url::to(['shop/view', 'id' =>$fruit->id]) ?>">
                            Buy Now
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="client_section layout_padding-bottom">
    <div class="container ">
        <div class="heading_container">
            <h2><?= $settings->selection4 ?></h2>
            <hr>
        </div>
        <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="client_container layout_padding-top">
                        <?php /** @var common\models\Testimonial $testimonialtittle */
                        foreach ($testimonialtittle as $monialstitle): ?>
                            <div class="img-box">
                                <?= Html::img("@web/$monialstitle->img") ?>
                            </div>
                            <div class="detail-box">
                                <h5> <?= $monialstitle->name ?> </h5>
                                <p>
                                    <img src="images/left-quote.png" alt="">
                                    <span><?= $monialstitle->title ?></span>
                                    <img src="images/right-quote.png" alt=""> <br>
                                    <?= $monialstitle->description ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php /** @var common\models\Testimonial $testimonials */
                foreach ($testimonials as $monials): ?>
                    <div class="carousel-item">
                        <div class="client_container layout_padding-top">
                            <div class="img-box">
                                <?= Html::img("@web/$monials->img") ?>
                            </div>
                            <div class="detail-box">
                                <h5> <?= $monials->name ?> </h5>
                                <p>
                                    <img src="images/left-quote.png" alt="">
                                    <span><?= $monials->title ?></span>
                                    <img src="images/right-quote.png" alt=""> <br>
                                    <?= $monials->description ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<section class="contact_section layout_padding-bottom">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-lg-2 col-md-10 offset-md-1">
                <div class="heading_container">
                    <hr>
                    <h2><?= $settings->selection5 ?></h2>
                </div>
            </div>
        </div>
        <div class="layout_padding2-top">
            <div class="row">
                <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1">
                    <div class="contact_form-container">
                        <div class="row">
                            <div class="col-lg-10">
                                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                                <?= $form->field($model, 'name')->textInput(['placeholder' => 'Name'])->label(false); ?>
                                <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email'])->label(false); ?>
                                <?= $form->field($model, 'number', [
                                    'inputOptions' => ['class' => 'form-control transparent']
                                ])->textInput()->widget(MaskedInput::class, [
                                    'mask' => '+7 (999) 999-99-99',
                                    'options' => ['placeholder' => 'Phone']
                                ])->label(false); ?>
                                <?= $form->field($model, 'message',[ 'inputOptions' => ['class' => 'form-control transparent']
                                ])->label(false)->textarea(['rows' => 6]) ?>
                                <div>
                                    <?= Html::submitButton('Submit', [ 'name' => 'contact-button']) ?>
                                </div>
                                <?php ActiveForm::end(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-0">
                    <div class="map_container">
                        <div class="map-responsive">
                            <iframe src="<?= $settings->locationUrl ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
