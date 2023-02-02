<?php

/** @var yii\web\View $this */
/** @var \common\models\Testimonial $model */

$this->title = 'Создать отзыв';
$this->params['breadcrumbs'][] = ['label' => 'Testimonials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testimonial-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
