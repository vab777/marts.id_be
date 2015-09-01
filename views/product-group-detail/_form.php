<?php

use app\models\ProductGroup;
use app\models\Products;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductGroupDetail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-group-detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_group_id')->dropDownList(
        ArrayHelper::map(ProductGroup::find()->all(), 'product_group_id', 'product_group_desc'),
        ['prompt'=>'Select Product Group Description']
    ) ?>

    <?= $form->field($model, 'product_id')->dropDownList(
        ArrayHelper::map(Products::find()->all(), 'product_id', 'product_name'),
        ['prompt'=>'Select Product Name']
    ) ?>

    <?= $form->field($model, 'product_qty')->textInput() ?>

    <?= $form->field($model, 'product_ori_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_group_price')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
