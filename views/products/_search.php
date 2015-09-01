<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'product_id') ?>

    <?= $form->field($model, 'category_id') ?>

    <?= $form->field($model, 'manufacturer_id') ?>

    <?= $form->field($model, 'prod_name') ?>

    <?= $form->field($model, 'upc_barcode') ?>

    <?php // echo $form->field($model, 'ean13_barcode') ?>

    <?php // echo $form->field($model, 'qty') ?>

    <?php // echo $form->field($model, 'min_qty') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'wholesale_price') ?>

    <?php // echo $form->field($model, 'visibility') ?>

    <?php // echo $form->field($model, 'prod_short_desc') ?>

    <?php // echo $form->field($model, 'prod_long_desc') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'width') ?>

    <?php // echo $form->field($model, 'height') ?>

    <?php // echo $form->field($model, 'depth') ?>

    <?php // echo $form->field($model, 'additional_shipping_cost') ?>

    <?php // echo $form->field($model, 'flag_active')->checkbox() ?>

    <?php // echo $form->field($model, 'flag_onsale')->checkbox() ?>

    <?php // echo $form->field($model, 'flag_visible')->checkbox() ?>

    <?php // echo $form->field($model, 'flag_show_price')->checkbox() ?>

    <?php // echo $form->field($model, 'flag_available')->checkbox() ?>

    <?php // echo $form->field($model, 'available_date') ?>

    <?php // echo $form->field($model, 'qty_onsale') ?>

    <?php // echo $form->field($model, 'size_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
