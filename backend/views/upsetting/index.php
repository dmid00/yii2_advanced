<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\UpsettingSeatch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Настройки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-8 mx-auto">
        <h3>Вы действительно хотите редактировать настройки?</h3>
        <?= Html::a('Редактировать настройки', ['update', 'id' => 1], ['class' => 'btn btn-warning']) ?>
    </div>
</div>
