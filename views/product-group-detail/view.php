<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ProductGroupDetail */

$this->title = $model->product_group_detail_id;
$this->params['breadcrumbs'][] = ['label' => 'Product Group Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-group-detail-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'product_group_detail_id' => $model->product_group_detail_id, 'product_group_id' => $model->product_group_id, 'product_id' => $model->product_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'product_group_detail_id' => $model->product_group_detail_id, 'product_group_id' => $model->product_group_id, 'product_id' => $model->product_id], [
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
            'product_group_detail_id',
            'productGroup.product_group_desc',
            'product.product_name',
            'product_qty',
            'product_ori_price',
            'product_group_price',
        ],
    ]) ?>

</div>
