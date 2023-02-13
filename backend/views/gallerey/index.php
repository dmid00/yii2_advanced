<?php

use common\models\Gallerey;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\GallereySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Галерея';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallerey-index">

    <p>
        <?= Html::a('Добавть изображение', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'img',
            [
                'label' => '',
                'attribute' => 'ImagesPreview',
                'format' => ['image',['width'=>'100']],
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Gallerey $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
