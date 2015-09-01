<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductGroupDetailSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-group-detail-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'product_group_detail_id') ?>

    <?= $form->field($model, 'product_group_id') ?>

    <?= $form->field($model, 'product_id') ?>

    <?= $form->field($model, 'product_qty') ?>

    <?= $form->field($model, 'product_ori_price') ?>

    <?php // echo $form->field($model, 'product_group_price') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
