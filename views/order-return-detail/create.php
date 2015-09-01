<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\OrderReturnDetail */

$this->title = 'Create Order Return Detail';
$this->params['breadcrumbs'][] = ['label' => 'Order Return Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-return-detail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
