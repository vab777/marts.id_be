<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AddressSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>

<div class="pull-left breadcrumb_admin clear_both">
    <div class="pull-left page_title theme_color">
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
                      <?= Html::a('Create Address', ['create'], ['class' => 'btn btn-success']) ?>
                  </p>
                  <?= GridView::widget([
                      'dataProvider' => $dataProvider,
                      'filterModel' => $searchModel,
                      'columns' => [
                          ['class' => 'yii\grid\SerialColumn'],
                          //'address_id',
                          [
                              'attribute'=>'country_id',
                              'value'=>'country.country_name',
                          ],
                          [
                              'attribute'=>'province_id',
                              'value'=>'province.province_name',
                          ],
                          [
                              'attribute'=>'customer_id',
                              'value'=>'customer.first_name',
                          ],
                          'address_category',
                           'address_1',
                          // 'address_2',
                          // 'postcode',
                          // 'city',
                          // 'phone_1',
                          // 'phone_2',
                          // 'other',
                          // 'flag_active:boolean',
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
