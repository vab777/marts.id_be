<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductGroupDetailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Product Group Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-group-detail-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product Group Detail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'product_group_detail_id',
            [
                'attribute'=>'product_group_id',
                'value'=>'productGroup.product_group_desc',
            ],
            [
                'attribute'=>'product_id',
                'value'=>'product.product_name',
            ],
            'product_qty',
            'product_ori_price',
            'product_group_price',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
