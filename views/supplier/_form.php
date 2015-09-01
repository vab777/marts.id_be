<?php

use app\models\Country;
use app\models\Province;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Supplier */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="form-horizontal group-border-dashed" action="#" parsley-validate novalidate>
<?php $form = ActiveForm::begin(); ?>
    <div class="form-group">
      <label class="col-sm-3 control-label">Supplier Name</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'supplier_name')->label(false)->textInput(['maxlength' => 45, 'placeholder'=> 'Input supplier name.']) ?>
      </div>
    </div><!--/form-group-->

    <div class="form-group">
      <label class="col-sm-3 control-label">Supplier Description</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'supplier_desc')->label(false)->textArea(['maxlength' =>500,'class'=>'form-control ckeditor', 'placeholder'=> 'Input general description', 'rows'=>'3']) ?> 
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Contact Person</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'contact_person')->label(false)->textInput(['maxlength' => 50, 'placeholder'=> 'Input contact person.']) ?>
      </div>
    </div><!--/form-group-->
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Address 1</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'address_1')->label(false)->textArea(['maxlength' => 100,'class'=>'form-control ckeditor', 'placeholder'=> 'Input address 1', 'rows'=>'3']) ?> 
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Address 2</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'address_2')->label(false)->textArea(['maxlength' => 100,'class'=>'form-control ckeditor', 'placeholder'=> 'Input address 2', 'rows'=>'3']) ?> 
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">City</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'city')->label(false)->textInput(['maxlength' => 50, 'placeholder'=> 'Input City.']) ?>
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Post Code</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'postcode')->label(false)->textInput(['maxlength' => 10, 'placeholder'=> 'Input Post Code.']) ?>
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Province</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'province_id')->label(false)->dropDownList(
             ArrayHelper::map(Province::find()->all(), 'province_id', 'province_name'),
             ['prompt'=>'Select Province', 'class'=>'form-control']
         ) ?>
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Country</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'country_id')->label(false)->dropDownList(
             ArrayHelper::map(Country::find()->all(), 'country_id', 'country_name'),
             ['prompt'=>'Select Country', 'class'=>'form-control']
         ) ?>
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Phone 1</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'phone_1')->label(false)->textInput(['maxlength' => 15, 'placeholder'=> 'Enter phone 1 number.', 'class'=>'form-control', 'parsley-type'=> 'number']) ?>  
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Phone 2</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'phone_2')->label(false)->textInput(['maxlength' => 15, 'placeholder'=> 'Enter phone 2 number.', 'class'=>'form-control', 'parsley-type'=> 'number']) ?>  
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Fax</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'fax')->label(false)->textInput(['maxlength' => 20, 'placeholder'=> 'Enter fax number.', 'class'=>'form-control', 'parsley-type'=> 'number']) ?>  
      </div>
    </div><!--/form-group-->
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Logo URL</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'logo_url')->label(false)->textInput(['maxlength' => 500, 'placeholder'=> 'Enter logo URL.', 'class'=>'form-control', 'parsley-type'=> 'number']) ?>  
      </div>
    </div>
    
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

        </div>
    </div>
                
<?php ActiveForm::end(); ?>
</div>

