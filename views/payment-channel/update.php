<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PaymentChannel */

$this->title = 'Update Payment Channel: ' . ' ' . $model->payment_channel_id;
$this->params['breadcrumbs'][] = ['label' => 'Payment Channels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->payment_channel_id, 'url' => ['view', 'payment_channel_id' => $model->payment_channel_id, 'customer_id' => $model->customer_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1><?= $this->title = 'Payment Channel';?></h1>
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

