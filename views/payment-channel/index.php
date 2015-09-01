<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PaymentChannelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Payment Channels';
$this->params['breadcrumbs'][] = $this->title;
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
                  <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                  <p>
                      <?= Html::a('Create Payment Channel', ['create'], ['class' => 'btn btn-success']) ?>
                  </p>
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            'payment_channel_id',
                            'payment_channel_name',
                            [
                                'attribute'=>'customer_id',
                                'value'=>'customer.first_name',
                            ],
                            'payment_category',
                            'cc_type',
                            'cc_no',
                            // 'cvv',
                            // 'exp_month',
                            // 'exp_year',
                            // 'paypal_id',
                            // 'flag_active:boolean',
                            // 'date_added',
                            // 'date_update',

                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>
              </div>
        </div>
      </div>
  </div>
</div>
