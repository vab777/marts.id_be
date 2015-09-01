<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Order', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'order_id',
            'order_no',
            'order_date',
            'customer_id',
            'cart_id',
            // 'carrier_id',
            // 'payment_channel_id',
            // 'current_state',
            // 'flag_gift',
            // 'gift_message',
            // 'flag_free_delivery:boolean',
            // 'total_product_count',
            // 'total_order',
            // 'total_discount',
            // 'total_tax',
            // 'total_shipping_cost',
            // 'total_shipping_tax',
            // 'total_wrapping',
            // 'grand_total',
            // 'round_mode',
            // 'grand_total_rounded',
            // 'total_paid',
            // 'total_weight',
            // 'delivery_no',
            // 'delivery_date',
            // 'delivery_time_id:datetime',
            // 'delivery_address_id',
            // 'tracking_no',
            // 'invoice_no',
            // 'invoice_date',
            // 'invoice_address_id',
            // 'date_added',
            // 'date_update',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
