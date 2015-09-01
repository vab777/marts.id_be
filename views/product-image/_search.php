<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductImageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-image-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'product_image_id') ?>

    <?= $form->field($model, 'product_id') ?>

    <?= $form->field($model, 'thumb_url') ?>

    <?= $form->field($model, 'mid_size_url') ?>

    <?= $form->field($model, 'ori_size_url') ?>

    <?php // echo $form->field($model, 'flag_cover')->checkbox() ?>

    <?php // echo $form->field($model, 'position') ?>

    <?php // echo $form->field($model, 'flag_active')->checkbox() ?>

    <?php // echo $form->field($model, 'date_added') ?>

    <?php // echo $form->field($model, 'date_update') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
