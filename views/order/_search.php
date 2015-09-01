<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'order_id') ?>

    <?= $form->field($model, 'order_no') ?>

    <?= $form->field($model, 'order_date') ?>

    <?= $form->field($model, 'customer_id') ?>

    <?= $form->field($model, 'cart_id') ?>

    <?php // echo $form->field($model, 'carrier_id') ?>

    <?php // echo $form->field($model, 'payment_channel_id') ?>

    <?php // echo $form->field($model, 'current_state') ?>

    <?php // echo $form->field($model, 'flag_gift') ?>

    <?php // echo $form->field($model, 'gift_message') ?>

    <?php // echo $form->field($model, 'flag_free_delivery')->checkbox() ?>

    <?php // echo $form->field($model, 'total_product_count') ?>

    <?php // echo $form->field($model, 'total_order') ?>

    <?php // echo $form->field($model, 'total_discount') ?>

    <?php // echo $form->field($model, 'total_tax') ?>

    <?php // echo $form->field($model, 'total_shipping_cost') ?>

    <?php // echo $form->field($model, 'total_shipping_tax') ?>

    <?php // echo $form->field($model, 'total_wrapping') ?>

    <?php // echo $form->field($model, 'grand_total') ?>

    <?php // echo $form->field($model, 'round_mode') ?>

    <?php // echo $form->field($model, 'grand_total_rounded') ?>

    <?php // echo $form->field($model, 'total_paid') ?>

    <?php // echo $form->field($model, 'total_weight') ?>

    <?php // echo $form->field($model, 'delivery_no') ?>

    <?php // echo $form->field($model, 'delivery_date') ?>

    <?php // echo $form->field($model, 'delivery_time_id') ?>

    <?php // echo $form->field($model, 'delivery_address_id') ?>

    <?php // echo $form->field($model, 'tracking_no') ?>

    <?php // echo $form->field($model, 'invoice_no') ?>

    <?php // echo $form->field($model, 'invoice_date') ?>

    <?php // echo $form->field($model, 'invoice_address_id') ?>

    <?php // echo $form->field($model, 'date_added') ?>

    <?php // echo $form->field($model, 'date_update') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
