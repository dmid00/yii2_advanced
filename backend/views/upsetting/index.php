<?php

use app\models\Upsetting;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\UpsettingSeatch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Upsettings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="upsetting-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create upsetting', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'namesite',
            'email:email',
            'location',
            'phone',
            //'sendEmail:email',
            //'sendPassEmail:email',
            //'locationUrl',
            //'selection1',
            //'selection2',
            //'selection3',
            //'selection4',
            //'selection5',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Upsetting $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
