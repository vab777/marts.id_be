<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Products */

$this->title = $model->product_id;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pull-left breadcrumb_admin clear_both">
    <div class="pull-left page_title theme_color">
      <h1><?= Html::encode($this->title) ?></h1>
      <h1><?= $this->title = 'Addresses';?></h1>
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
                        <?= Html::a('Update', ['update', 'product_id' => $model->product_id, 'category_id' => $model->category_id, 'manufacturer_id' => $model->manufacturer_id, 'size_id' => $model->size_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'product_id' => $model->product_id, 'category_id' => $model->category_id, 'manufacturer_id' => $model->manufacturer_id, 'size_id' => $model->size_id], [
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
                           'product_id',
                           'category.category_name',
                           'manufacturer.manufacturer_name',
                           'product_name',
                           'upc_barcode',
                           'ean13_barcode',
                           'qty',
                           'min_qty',
                           'price',
                           'wholesale_price',
                           'visibility',
                           'prod_short_desc',
                           'prod_long_desc',
                           'weight',
                           'width',
                           'height',
                           'depth',
                           'additional_shipping_cost',
                           'flag_active:boolean',
                           'flag_onsale:boolean',
                           'flag_visible:boolean',
                           'flag_show_price:boolean',
                           'flag_available:boolean',
                           'available_date',
                           'qty_onsale',
                           'size.size_name',
                           'size',
                           'reduction_price',
                           'flag_reduction:boolean',
                           'reduction_type',
                           'date_added',
                           'date_update',
                       ],
                   ]) ?>
              </div>
        </div>
      </div>
  </div>
</div>

