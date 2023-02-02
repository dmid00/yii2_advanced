<?php

/** @var yii\web\View $this */
/** @var \common\models\Category $model */

$this->title = 'Создать раздел';
$this->params['breadcrumbs'][] = ['label' => 'Navbars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="navbar-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
