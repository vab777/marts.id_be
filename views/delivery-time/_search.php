<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DeliveryTimeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="delivery-time-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'delivery_time_id') ?>

    <?= $form->field($model, 'delivery_time_range') ?>

    <?= $form->field($model, 'flag_peak_hour')->checkbox() ?>

    <?= $form->field($model, 'conversion_rate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
