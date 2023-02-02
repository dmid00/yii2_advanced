<?php

/** @var yii\web\View $this */
/** @var \common\models\Upsetting $model */

$this->title = 'Создать настройки';
$this->params['breadcrumbs'][] = ['label' => 'Upsettings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="upsetting-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
