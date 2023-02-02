<?php

/** @var yii\web\View $this */
/** @var \common\models\About $model */

$this->title = 'Создать описание';
$this->params['breadcrumbs'][] = ['label' => 'Abouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
