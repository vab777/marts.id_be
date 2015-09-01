<?php

use app\models\Products;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductImage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-image-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_id')->dropDownList(
        ArrayHelper::map(Products::find()->all(), 'product_id', 'product_name'),
        ['prompt'=>'Select Product Name']
    ) ?>

    <?= $form->field($model, 'thumb_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mid_size_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ori_size_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'flag_cover')->checkbox() ?>

    <?= $form->field($model, 'position')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
