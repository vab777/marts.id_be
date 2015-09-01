<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pull-left breadcrumb_admin clear_both">
    <div class="pull-left page_title theme_color">
      <h1><?= $this->title = 'Products';?></h1>
      <h2 class=""><?= $this->params['breadcrumbs'][] = $this->title;?></h2>
    </div>
</div>

<div class="container clear_both padding_fix">
  <div class="row">
      <div class="col-md-12">
          <div class="block-web">
              <div class="porlets-content">
                  <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                  <p>
                      <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
                  </p>
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            'product_id',
                            [
                                'attribute'=>'category_id',
                                'value'=>'category.category_name',
                            ],
                            [
                                'attribute'=>'manufacturer_id',
                                'value'=>'manufacturer.manufacturer_name',
                            ],
                            'product_name',
                            // 'upc_barcode',
                            // 'ean13_barcode',
                            // 'qty',
                            // 'min_qty',
                             'price',
                            // 'wholesale_price',
                            // 'visibility',
                             'prod_short_desc',
                            // 'prod_long_desc',
                            // 'weight',
                            // 'width',
                            // 'height',
                            // 'depth',
                            // 'additional_shipping_cost',
                            // 'flag_active:boolean',
                            // 'flag_onsale:boolean',
                            // 'flag_visible:boolean',
                            // 'flag_show_price:boolean',
                            // 'flag_available:boolean',
                            // 'available_date',
                            // 'qty_onsale',
                            // 'size_id',
                            // 'size',
                            // 'reduction_price',
                            // 'flag_reduction:boolean',
                            // 'reduction_type',
                            // 'date_added',
                            // 'date_update',
                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>
              </div>
        </div>
      </div>
  </div>
</div>