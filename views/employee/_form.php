<?php

use app\models\Position;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="form-horizontal group-border-dashed" action="#" parsley-validate novalidate>
<?php $form = ActiveForm::begin(); ?>
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Salutation</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'salutation')->label(false)->dropDownList($model->getSalutationOptions(),['prompt'=>'Select Salutation', 'class' => 'form-control']); ?>
      </div>
    </div><!--/form-group--> 

    <div class="form-group">
      <label class="col-sm-3 control-label">First Name</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'first_name')->label(false)->textInput(['maxlength' => 50, 'placeholder'=> 'Input first name.']) ?>
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Last Name</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'last_name')->label(false)->textInput(['maxlength' => 50, 'placeholder'=> 'Input last name.']) ?>
      </div>
    </div><!--/form-group--> 

    <div class="form-group">
      <label class="col-sm-3 control-label">Gender</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'gender')->label(false)->dropDownList($model->getGenderOptions(),['prompt'=>'Select Gender', 'class' => 'form-control']);?>
      </div>
    </div><!--/form-group--> 

    <div class="form-group">
      <label class="col-sm-3 control-label">Birthday</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'birthday')->label(false)->textInput(['maxlength' => 10,'class'=>'form-control form-control-inline input-medium default-date-picker']) ?> 
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Email</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'email')->label(false)->textInput(['maxlength' => 50, 'placeholder'=> 'Max 50 chars.']) ?>
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Password</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'password')->label(false)->passwordInput(['maxlength' => 50, 'placeholder'=> 'Max 50 chars.']) ?>
      </div>
    </div><!--/form-group--> 

    <div class="form-group">
      <label class="col-sm-3 control-label">Last Password Generate</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'last_password_gen')->label(false)->textInput(['maxlength' => 10,'class'=>'form-control form-control-inline input-medium default-date-picker']) ?> 
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Mobile Phone</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'mobile_phone')->label(false)->textInput(['maxlength' => 15, 'placeholder'=> 'Enter number only.', 'class'=>'form-control', 'parsley-type'=> 'number']) ?>  
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Position</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'position_id')->label(false)->dropDownList(
            ArrayHelper::map(Position::find()->all(), 'position_id', 'position_name'),
            ['prompt'=>'Select Position Name','class'=>'form-control']
        ) ?>
      </div>
    </div><!--/form-group--> 

    <div class="form-group">
      <label class="col-sm-3 control-label">Note</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'note')->label(false)->textArea(['maxlength' => 500,'class'=>'form-control ckeditor', 'placeholder'=> 'Input address 1.', 'rows'=>'3']) ?> 
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Last Visit</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'last_visit')->label(false)->textInput(['maxlength' => 10,'class'=>'form-control form-control-inline input-medium default-date-picker']) ?> 
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Status</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'status')->label(false)->dropDownList($model->getEmployeeStatusOptions(),['prompt'=>'Select Status', 'class' => 'form-control']);?>
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

        </div>
    </div>
                
<?php ActiveForm::end(); ?>
</div>

