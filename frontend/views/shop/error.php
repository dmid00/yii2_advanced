<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Url;

$this->title = '404';
?>


<section class="shop_section layout_padding">
    <div class="container">
        <div class="box">
            <div class="detail-box">
                <h2>4🍍4</h2>
                <h1>Page not found</h1>
                <a href="<?= Url::to(['/']) ?>">Return home</a>
            </div>
        </div>
    </div>
</section>