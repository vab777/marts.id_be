<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProductImage */

$this->title = 'Update Product Image: ' . ' ' . $model->product_image_id;
$this->params['breadcrumbs'][] = ['label' => 'Product Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->product_image_id, 'url' => ['view', 'product_image_id' => $model->product_image_id, 'product_id' => $model->product_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-image-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
