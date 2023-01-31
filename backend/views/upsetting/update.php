<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Upsetting $model */

$this->title = 'Изменить настройки';
$this->params['breadcrumbs'][] = ['label' => 'Upsettings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="upsetting-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
