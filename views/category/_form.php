<?php

use app\models\Category;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="form-horizontal group-border-dashed" action="#" parsley-validate novalidate>
<?php $form = ActiveForm::begin(); ?>
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Category Name</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'category_name')->label(false)->textInput(['maxlength' => 100, 'placeholder'=> 'Input Category name.']) ?>
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Level</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'level')->label(false)->dropDownList(['0'=> 0, '1'=>1,'2'=>2,'3'=>3],['prompt'=>'Select Level', 'class' => 'form-control']);?>
      </div>
    </div><!--/form-group-->
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Parent</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'parent_id')->label(false)->dropDownList(
            ArrayHelper::map(Category::find()->all(), 'category_id', 'category_name'),
            ['prompt'=>'Select Parent Category','class'=>'form-control']
        ) ?>
      </div>
    </div><!--/form-group-->  
    
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

        </div>
    </div>
                
<?php ActiveForm::end(); ?>
</div>
