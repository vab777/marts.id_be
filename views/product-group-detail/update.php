<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProductGroupDetail */

$this->title = 'Update Product Group Detail: ' . ' ' . $model->product_group_detail_id;
$this->params['breadcrumbs'][] = ['label' => 'Product Group Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->product_group_detail_id, 'url' => ['view', 'product_group_detail_id' => $model->product_group_detail_id, 'product_group_id' => $model->product_group_id, 'product_id' => $model->product_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-group-detail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
