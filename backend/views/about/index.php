<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\AboutSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Информация о компании';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-index">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h3>Вы действительно хотите изменить информацию о компании? Создайте раздел, если он не отображается</h3>
            <?= Html::a('Редактировать информацию сайта', ['update', 'id' => 1], ['class' => 'btn btn-warning']) ?>
            <?= Html::a('Создать раздел', ['create'], ['class' => 'btn btn-success']) ?>
        </div>
    </div>
</div>
