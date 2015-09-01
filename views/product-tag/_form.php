<?php

use app\models\Products;
use app\models\Tag;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductTag */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-tag-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_id')->dropDownList(
        ArrayHelper::map(Products::find()->all(), 'product_id', 'product_name'),
        ['prompt'=>'Select Product Name']
    ) ?>

    <?= $form->field($model, 'tag_id')->dropDownList(
        ArrayHelper::map(Tag::find()->all(), 'tag_id', 'tag_name'),
        ['prompt'=>'Select Tag Name']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
