<?php

/** @var yii\web\View $this */
/** @var \common\models\Ourfruit $model */

$this->title = 'Изменить товар: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Ourfruits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ourfruit-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
