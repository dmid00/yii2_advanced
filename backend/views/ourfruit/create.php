<?php

/** @var yii\web\View $this */
/** @var \common\models\Ourfruit $model */

$this->title = 'Создать товар';
$this->params['breadcrumbs'][] = ['label' => 'Ourfruits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ourfruit-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
