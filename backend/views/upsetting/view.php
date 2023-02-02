<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var \common\models\Upsetting $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Upsettings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="upsetting-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'namesite',
            'email:email',
            'location',
            'phone',
            'sendEmail:email',
            'sendPassEmail:email',
            'locationUrl',
            'selection1',
            'selection2',
            'selection3',
            'selection4',
            'selection5',
        ],
    ]) ?>

</div>
