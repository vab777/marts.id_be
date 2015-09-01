<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OrderReturnDetail */

$this->title = 'Update Order Return Detail: ' . ' ' . $model->order_return_id;
$this->params['breadcrumbs'][] = ['label' => 'Order Return Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->order_return_id, 'url' => ['view', 'order_return_id' => $model->order_return_id, 'order_detail_id' => $model->order_detail_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="order-return-detail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
