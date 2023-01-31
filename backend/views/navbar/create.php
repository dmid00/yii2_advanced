<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Navbar $model */

$this->title = 'Создать раздел';
$this->params['breadcrumbs'][] = ['label' => 'Navbars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="navbar-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
