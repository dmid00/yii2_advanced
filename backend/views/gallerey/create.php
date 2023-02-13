<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Gallerey $model */

$this->title = 'Добавить изображение';
$this->params['breadcrumbs'][] = ['label' => 'Gallereys', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallerey-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
