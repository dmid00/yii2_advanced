<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Testimonial $model */

$this->title = 'Изменить отзыв покупателя: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Testimonials', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="testimonial-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
