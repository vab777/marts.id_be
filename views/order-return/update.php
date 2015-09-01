<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OrderReturn */

$this->title = 'Update Order Return: ' . ' ' . $model->order_return_id;
$this->params['breadcrumbs'][] = ['label' => 'Order Returns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->order_return_id, 'url' => ['view', 'order_return_id' => $model->order_return_id, 'order_id' => $model->order_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="order-return-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
