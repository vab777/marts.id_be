<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Employee */

$this->title = 'Create Employee';
$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1><?= $this->title = 'Create Employee';?></h1>
          <h2 class=""><?= $this->params['breadcrumbs'][] = $this->title;?></h2>
        </div>
        
</div>

<div class="container clear_both padding_fix">
        <div class="row">
            <div class="col-md-12">
                <div class="block-web">
                    <div class="porlets-content">
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
</div>