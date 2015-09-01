<?php

use app\models\Post;
use app\models\Tag;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PostTag */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-tag-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'post_id')->dropDownList(
        ArrayHelper::map(Post::find()->all(), 'post_id', 'post_title'),
        ['prompt'=>'Select Post Title']
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
