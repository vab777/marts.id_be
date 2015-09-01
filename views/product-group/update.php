<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProductGroup */

$this->title = 'Update Product Group: ' . ' ' . $model->product_group_id;
$this->params['breadcrumbs'][] = ['label' => 'Product Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->product_group_id, 'url' => ['view', 'id' => $model->product_group_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-group-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
