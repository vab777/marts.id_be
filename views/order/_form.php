<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'order_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order_date')->textInput() ?>

    <?= $form->field($model, 'customer_id')->textInput() ?>

    <?= $form->field($model, 'cart_id')->textInput() ?>

    <?= $form->field($model, 'carrier_id')->textInput() ?>

    <?= $form->field($model, 'payment_channel_id')->textInput() ?>

    <?= $form->field($model, 'current_state')->textInput() ?>

    <?= $form->field($model, 'flag_gift')->textInput() ?>

    <?= $form->field($model, 'gift_message')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'flag_free_delivery')->checkbox() ?>

    <?= $form->field($model, 'total_product_count')->textInput() ?>

    <?= $form->field($model, 'total_order')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_discount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_tax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_shipping_cost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_shipping_tax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_wrapping')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grand_total')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'round_mode')->textInput() ?>

    <?= $form->field($model, 'grand_total_rounded')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_paid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_weight')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'delivery_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'delivery_date')->textInput() ?>

    <?= $form->field($model, 'delivery_time_id')->textInput() ?>

    <?= $form->field($model, 'delivery_address_id')->textInput() ?>

    <?= $form->field($model, 'tracking_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'invoice_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'invoice_date')->textInput() ?>

    <?= $form->field($model, 'invoice_address_id')->textInput() ?>

    <?= $form->field($model, 'date_added')->textInput() ?>

    <?= $form->field($model, 'date_update')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
