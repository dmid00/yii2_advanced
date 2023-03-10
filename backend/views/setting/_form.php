<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var \common\models\Upsetting $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="container">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'namesite')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sendEmail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sendPassEmail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'locationUrl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'selection1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'selection2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'selection3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'selection4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'selection5')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
