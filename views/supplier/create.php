<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Supplier */

$this->title = 'Create Supplier';
$this->params['breadcrumbs'][] = ['label' => 'Suppliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1><?= $this->title = 'Create Supplier';?></h1>
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