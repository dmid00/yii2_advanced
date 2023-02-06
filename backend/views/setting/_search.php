<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\SettingSeatch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="upsetting-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'namesite') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'location') ?>

    <?= $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'sendEmail') ?>

    <?php // echo $form->field($model, 'sendPassEmail') ?>

    <?php // echo $form->field($model, 'locationUrl') ?>

    <?php // echo $form->field($model, 'selection1') ?>

    <?php // echo $form->field($model, 'selection2') ?>

    <?php // echo $form->field($model, 'selection3') ?>

    <?php // echo $form->field($model, 'selection4') ?>

    <?php // echo $form->field($model, 'selection5') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
