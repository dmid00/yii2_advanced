<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Ourfruit $model */

$this->title = 'Create Ourfruit';
$this->params['breadcrumbs'][] = ['label' => 'Ourfruits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ourfruit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
