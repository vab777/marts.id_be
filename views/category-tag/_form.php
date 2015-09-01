<?php

use app\models\Category;
use app\models\Tag;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CategoryTag */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-tag-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_id')->dropDownList(
        ArrayHelper::map(Category::find()->all(), 'category_id', 'category_name'),
        ['prompt'=>'Select Category Name']
    ) ?>

    <?= $form->field($model, 'tag_id')->dropDownList(
        ArrayHelper::map(Tag::find()->all(), 'tag_id', 'tag_name'),
        ['prompt'=>'Select Tag Name']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
