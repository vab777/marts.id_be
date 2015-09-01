<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PaymentChannelSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="payment-channel-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'payment_channel_id') ?>

    <?= $form->field($model, 'customer_id') ?>

    <?= $form->field($model, 'payment_category') ?>

    <?= $form->field($model, 'cc_type') ?>

    <?= $form->field($model, 'cc_no') ?>

    <?php // echo $form->field($model, 'cvv') ?>

    <?php // echo $form->field($model, 'exp_month') ?>

    <?php // echo $form->field($model, 'exp_year') ?>

    <?php // echo $form->field($model, 'paypal_id') ?>

    <?php // echo $form->field($model, 'flag_active')->checkbox() ?>

    <?php // echo $form->field($model, 'date_added') ?>

    <?php // echo $form->field($model, 'date_update') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
