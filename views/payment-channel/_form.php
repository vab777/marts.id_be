<?php

use app\models\Customer;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PaymentChannel */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="form-horizontal group-border-dashed" action="#" parsley-validate novalidate>
<?php $form = ActiveForm::begin(); ?>
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Payment Channel Name</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'payment_channel_name')->label(false)->textInput(['maxlength' => 50, 'placeholder'=> 'Input first name.']) ?>
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Customer</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'customer_id')->label(false)->dropDownList(
        ArrayHelper::map(Customer::find()->all(), 'customer_id', 'first_name'),
        ['prompt'=>'Select Customer Name']
        ) ?>  
      </div>
    </div><!--/form-group--> 

    <div class="form-group">
      <label class="col-sm-3 control-label">Payment Category</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'payment_category')->label(false)->dropDownList($model->getPaymentCategoryOptions(),['prompt'=>'Select Payment Category', 'class' => 'form-control']); ?>
      </div>
    </div><!--/form-group--> 

    <div class="form-group">
      <label class="col-sm-3 control-label">Credit Card Type</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'cc_type')->label(false)->dropDownList($model->getCCTypeOptions(),['prompt'=>'Select CC Type', 'class' => 'form-control']); ?>
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Credit Card No</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'cc_no')->label(false)->textInput(['maxlength' => 50, 'placeholder'=> 'Input Credit Card No (Without -).']) ?>
      </div>
    </div><!--/form-group--> 

    <div class="form-group">
      <label class="col-sm-3 control-label">CVV</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'cvv')->label(false)->textInput(['maxlength' => 3, 'placeholder'=> 'Input 3 chars.']) ?>
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Expired Month</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'exp_month')->label(false)->passwordInput(['maxlength' => 2]) ?>
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Expired Year</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'exp_year')->label(false)->passwordInput(['maxlength' => 2]) ?>
      </div>
    </div><!--/form-group--> 

    <div class="form-group">
      <label class="col-sm-3 control-label">Paypal ID</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'paypal_id')->label(false)->textInput(['maxlength' => 100, 'placeholder'=> 'Enter paypal id(if exist).', 'class'=>'form-control']) ?>  
      </div>
    </div><!--/form-group--> 

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

        </div>
    </div>
                
<?php ActiveForm::end(); ?>
</div>
