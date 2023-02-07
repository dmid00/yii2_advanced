<?php

/** @var yii\web\View $this */
/** @var Ourfruit $model */

use common\models\Ourfruit;
use yii\helpers\Html;

if(!$title = $model->seo->title) {
    $title = "Купить {$model->name} ";
}

if(!$description = $model->seo->description) {
    $description = 'Страница '.$model->name;
}

if(!$keywords = $model->seo->keywords) {
    $keywords = '';
}

$this->title = $title;

$this->registerMetaTag([
    'name' => 'description',
    'content' => $description,
]);

$this->registerMetaTag([
    'name' => 'keywords',
    'content' => $keywords,
]);

?>

<section class="shop_section layout_padding">
    <div class="container">
        <div class="box">
            <div class="detail-box">
                <h1>Product Information</h1>
                <h7>(SEO widget view page)</h7>
            </div>
        </div>
    </div>
</section>
<section class="about_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 px-0">
                <div class="img-box">
                    <?= Html::img("@web/$model->img")?>
                </div>
            </div>
            <div class="col-md-5">
                <div class="detail-box">
                    <div class="heading_container">
                        <hr>
                        <h2><?= $model->name ?></h2>
                    </div>
                    <p><?= $model->seo->description ?></p>
                </div>
            </div>
        </div>
        <br>
    </div>
</section>
