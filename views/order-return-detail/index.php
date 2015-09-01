<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrderReturnDetailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Order Return Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-return-detail-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Order Return Detail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'order_return_id',
            'order_detail_id',
            'qty_returned',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
