<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\assets\LoginAsset;

LoginAsset::register($this);
?>
<?php $this->beginPage() ?>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>marts.id Login</title>
    <?php $this->head() ?>
</head>    
    
<body class="light_theme  fixed_header left_nav_fixed">
<?php $this->beginBody() ?>    
<div class="wrapper">
  <!--\\\\\\\ wrapper Start \\\\\\-->
  
  
  
  
  
<div class="login_page">
  <div class="login_content">
    <div class="panel-heading border login_heading">sign in now</div>
  
        <p>Please fill out the following fields to login:</p>
            
               <?php $form = ActiveForm::begin([
                   'id' => 'login-form',
                   'options' => ['class' => 'form-horizontal'],
                   'fieldConfig' => [
                       'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                       'labelOptions' => ['class' => 'col-lg-1 control-label'],
                   ],
               ]); ?>
                 <div class="form-group">
                     
                   <div class="col-sm-10">
                     <?= $form->field($model, 'username')->label(false)->textInput(['class' => 'form-control', 'placeholder'=>'Email','id'=>'inputEmail3','style'=>'width:275px']) ?>
                     
                   </div>
                   <div class="col-sm-10">
                     <?= $form->field($model, 'password')->label(false)->passwordInput(['class' => 'form-control', 'placeholder'=>'Password','id'=>'inputEmail3','type'=>'password','style'=>'width:275px']) ?>
                     
                   </div>  
                 </div>

                   <div class="form-group">
                       <div class="col-sm-10">
                           <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                       </div>
                   </div>

               <?php ActiveForm::end(); ?> 

           
 </div>
</div>
  
  
  
  
  
  
  
  
</div>
<!--\\\\\\\ wrapper end\\\\\\-->

<script src="js/jquery-2.1.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/common-script.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>