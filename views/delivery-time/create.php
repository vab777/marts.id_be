<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DeliveryTime */

$this->title = 'Create Delivery Time';
$this->params['breadcrumbs'][] = ['label' => 'Delivery Times', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1><?= $this->title = 'Delivery Time';?></h1>
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
