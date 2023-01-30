<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Upsetting $model */

$this->title = 'Create upsetting';
$this->params['breadcrumbs'][] = ['label' => 'Upsettings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="upsetting-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
