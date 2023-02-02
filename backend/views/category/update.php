<?php

/** @var yii\web\View $this */
/** @var \common\models\Category $model */

$this->title = 'Изменить раздел: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Navbars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="navbar-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
