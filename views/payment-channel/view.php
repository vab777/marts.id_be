<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PaymentChannel */

$this->title = $model->payment_channel_id;
$this->params['breadcrumbs'][] = ['label' => 'Payment Channels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pull-left breadcrumb_admin clear_both">
    <div class="pull-left page_title theme_color">
      <h1><?= Html::encode($this->title) ?></h1>
      <h1><?= $this->title = 'Addresses';?></h1>
      <h2 class=""><?= $this->params['breadcrumbs'][] = $this->title;?></h2>
    </div>
</div>

<div class="container clear_both padding_fix">
  <div class="row">
      <div class="col-md-12">
          <div class="block-web">
              <div class="porlets-content">
                  <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                    <p>
                        <?= Html::a('Update', ['update', 'payment_channel_id' => $model->payment_channel_id, 'customer_id' => $model->customer_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'payment_channel_id' => $model->payment_channel_id, 'customer_id' => $model->customer_id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </p>
                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'payment_channel_id',
                            'payment_channel_name',
                            'customer.first_name',
                            'payment_category',
                            'cc_type',
                            'cc_no',
                            'cvv',
                            'exp_month',
                            'exp_year',
                            'paypal_id',
                            'flag_active:boolean',
                            'date_added',
                            'date_update',
                        ],
                    ]) ?>
              </div>
        </div>
      </div>
  </div>
</div>

