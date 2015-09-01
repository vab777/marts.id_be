<?php

use app\models\Category;
use app\models\Manufacturer;
use app\models\Size;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="form-horizontal group-border-dashed" action="#" parsley-validate novalidate>
<?php $form = ActiveForm::begin(); ?>
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Product Name</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'product_name')->label(false)->textInput(['maxlength' => 100, 'placeholder'=> 'Input product name.']) ?>
      </div>
    </div><!--/form-group-->
 
    <div class="form-group">
      <label class="col-sm-3 control-label">Category</label>
      <div class="col-sm-6">
          <?= $form->field($model, 'category_id')->label(false)->dropDownList(
            ArrayHelper::map(Category::find()->all(), 'category_id', 'category_name'),
            ['prompt'=>'Select Category Name', 'class'=>'form-control']
          ) ?>
      </div>
    </div><!--/form-group--> 

    <div class="form-group">
      <label class="col-sm-3 control-label">Manufacturer</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'manufacturer_id')->label(false)->dropDownList(
             ArrayHelper::map(Manufacturer::find()->all(), 'manufacturer_id', 'manufacturer_name'),
             ['prompt'=>'Select Manufacturer Name', 'class'=>'form-control']
         ) ?>
      </div>
    </div><!--/form-group--> 

    <div class="form-group">
      <label class="col-sm-3 control-label">UPC Barcode</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'upc_barcode')->label(false)->textInput(['maxlength' => 12, 'placeholder'=> 'Input UPC Barcode.']) ?>
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">ean13 Barcode</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'ean13_barcode')->label(false)->textInput(['maxlength' => 13, 'class'=>'form-control', 'placeholder'=> 'Input ean13 Barcode.']) ?>
      </div>
    </div><!--/form-group--> 

    <div class="form-group">
      <label class="col-sm-3 control-label">Price</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'price')->label(false)->textInput(['maxlength' => 20, 'placeholder'=> 'Enter product price.', 'class'=>'form-control', 'parsley-type'=> 'number']) ?>  
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Wholesale Price</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'wholesale_price')->label(false)->textInput(['maxlength' => 20, 'placeholder'=> 'Enter product wholesale price.', 'class'=>'form-control', 'parsley-type'=> 'number']) ?>  
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Product Short Description</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'prod_short_desc')->label(false)->textArea(['maxlength' => 200,'class'=>'form-control ckeditor', 'placeholder'=> 'Input general description', 'rows'=>'2']) ?> 
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Product Long Description</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'prod_long_desc')->label(false)->textArea(['maxlength' => 500,'class'=>'form-control ckeditor', 'placeholder'=> 'Input product description', 'rows'=>'5']) ?> 
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Weight</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'weight')->label(false)->textInput(['maxlength' => 20, 'placeholder'=> 'Input weight.']) ?>
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Width</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'width')->label(false)->textInput(['maxlength' => 20, 'placeholder'=> 'Input width.']) ?>
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Height</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'height')->label(false)->textInput(['maxlength' => 20, 'placeholder'=> 'Input height.']) ?>
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Depth</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'depth')->label(false)->textInput(['maxlength' => 20, 'placeholder'=> 'Input depth.']) ?>
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Qty</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'qty')->label(false)->textInput(['maxlength' => 11, 'placeholder'=> 'Enter number only.', 'class'=>'form-control', 'parsley-type'=> 'number']) ?>  
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Min Qty</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'min_qty')->label(false)->textInput(['maxlength' => 11, 'placeholder'=> 'Enter number only.', 'class'=>'form-control', 'parsley-type'=> 'number']) ?>  
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Flag On Sale</label>
      <div class="col-sm-6">
          <div class="square single-row">
            <?= $form->field($model, 'flag_onsale')->checkbox(['label'=>'', 'class' => 'checkbox']);?>
          </div>
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Flag Visible</label>
      <div class="col-sm-6">
          <div class="square single-row">
            <?= $form->field($model, 'flag_visible')->checkbox(['label'=>'', 'class' => 'checkbox']);?>
          </div>
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Flag Show Price</label>
      <div class="col-sm-6">
          <div class="square single-row">
            <?= $form->field($model, 'flag_show_price')->checkbox(['label'=>'', 'class' => 'checkbox']);?>
          </div>
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Flag Available</label>
      <div class="col-sm-6">
          <div class="square single-row">
            <?= $form->field($model, 'flag_available')->checkbox(['label'=>'', 'class' => 'checkbox']);?>
          </div>
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Available Date</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'available_date')->label(false)->textInput(['maxlength' => 10,'class'=>'form-control form-control-inline input-medium default-date-picker']) ?> 
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Size</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'size')->label(false)->textInput(['maxlength' => 11, 'placeholder'=> 'Enter number only.', 'class'=>'form-control', 'parsley-type'=> 'number']) ?>  
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Size Measure</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'size_id')->label(false)->dropDownList(
             ArrayHelper::map(Size::find()->all(), 'size_id', 'size_name'),
             ['prompt'=>'Select Size Name', 'class'=>'form-control']
         ) ?>
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Qty on Sale</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'qty_onsale')->label(false)->textInput(['maxlength' => 11, 'placeholder'=> 'Enter number only.', 'class'=>'form-control', 'parsley-type'=> 'number']) ?>  
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Reduction Price</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'reduction_price')->label(false)->textInput(['maxlength' => 20, 'placeholder'=> 'Enter number only.', 'class'=>'form-control', 'parsley-type'=> 'number']) ?>  
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Flag Reduction</label>
      <div class="col-sm-6">
          <div class="square single-row">
            <?= $form->field($model, 'flag_reduction')->checkbox(['label'=>'', 'class' => 'checkbox']);?>
          </div>
      </div>
    </div><!--/form-group-->
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Reduction Type</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'reduction_type')->label(false)->dropDownList($model->getReductionTypeOptions(),['prompt'=>'Select Reduction Type', 'class' => 'form-control']); ?>
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Visibility</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'visibility')->label(false)->textInput(['maxlength' => 11, 'placeholder'=> 'Enter number only.', 'class'=>'form-control', 'parsley-type'=> 'number']) ?>  
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Additional Shipping Cost</label>
      <div class="col-sm-6">
        <?= $form->field($model, 'additional_shipping_cost')->label(false)->textInput(['maxlength' => 20, 'placeholder'=> 'Enter number only.', 'class'=>'form-control', 'parsley-type'=> 'number']) ?>  
      </div>
    </div><!--/form-group--> 
    
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

        </div>
    </div>
                
<?php ActiveForm::end(); ?>
</div>