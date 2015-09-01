<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\OrderReturnDetail */

$this->title = $model->order_return_id;
$this->params['breadcrumbs'][] = ['label' => 'Order Return Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-return-detail-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'order_return_id' => $model->order_return_id, 'order_detail_id' => $model->order_detail_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'order_return_id' => $model->order_return_id, 'order_detail_id' => $model->order_detail_id], [
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
            'order_return_id',
            'order_detail_id',
            'qty_returned',
        ],
    ]) ?>

</div>
