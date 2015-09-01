<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Manufacturer */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="form-horizontal group-border-dashed" action="#" parsley-validate novalidate>
<?php $form = ActiveForm::begin(); ?>
    <div class="form-group">
      <label class="col-sm-3 control-label">Manufacturer Name</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'manufacturer_name')->label(false)->textInput(['maxlength' => 50, 'placeholder'=> 'Input first name.']) ?>
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Manufacturer Description</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'manufacturer_desc')->label(false)->textArea(['maxlength' => 500,'class'=>'form-control ckeditor', 'placeholder'=> 'Input address 1.', 'rows'=>'3']) ?> 
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

        </div>
    </div>
       
<?php ActiveForm::end(); ?>
</div>         
