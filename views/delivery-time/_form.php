<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DeliveryTime */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="form-horizontal group-border-dashed" action="#" parsley-validate novalidate>
<?php $form = ActiveForm::begin(); ?>
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Delivery Time range</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'delivery_time_range')->label(false)->textInput(['maxlength' => 10, 'class' => 'form-control mask','data-inputmask' => '"mask":"00.00-01.00"']) ?>
      </div>
    </div><!--/form-group--> 

    <div class="form-group">
      <label class="col-sm-3 control-label">Flag Peak Hour</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'flag_peak_hour')->label(false)->dropDownList(['0' => 'No', '1' => 'Yes']); ?>
      </div>
    </div><!--/form-group--> 

    <div class="form-group">
      <label class="col-sm-3 control-label">Conversion Rate</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'conversion_rate')->label(false)->textInput(['maxlength' => 5, 'placeholder'=> 'Enter number only.', 'class'=>'form-control', 'parsley-type'=> 'number']) ?>  
      </div>
    </div><!--/form-group--> 

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

        </div>
    </div>
                
<?php ActiveForm::end(); ?>
</div>