<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Gallerey $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="container">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data'],
    ]); ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'img',
            [
                'label' => '',
                'attribute' => 'ImagesPreview',
                'format' => ['image',['width'=>'300']],
            ],
        ],
    ]) ?>

    <?= $form->field($model, 'file_gallerey')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
