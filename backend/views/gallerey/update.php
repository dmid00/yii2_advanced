<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Gallerey $model */

$this->title = 'Изменить: ' . $model->img;
$this->params['breadcrumbs'][] = ['label' => 'Gallereys', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gallerey-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
