<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Order */

$this->title = $model->order_id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->order_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->order_id], [
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
            'order_id',
            'order_no',
            'order_date',
            'customer_id',
            'cart_id',
            'carrier_id',
            'payment_channel_id',
            'current_state',
            'flag_gift',
            'gift_message',
            'flag_free_delivery:boolean',
            'total_product_count',
            'total_order',
            'total_discount',
            'total_tax',
            'total_shipping_cost',
            'total_shipping_tax',
            'total_wrapping',
            'grand_total',
            'round_mode',
            'grand_total_rounded',
            'total_paid',
            'total_weight',
            'delivery_no',
            'delivery_date',
            'delivery_time_id:datetime',
            'delivery_address_id',
            'tracking_no',
            'invoice_no',
            'invoice_date',
            'invoice_address_id',
            'date_added',
            'date_update',
        ],
    ]) ?>

</div>
