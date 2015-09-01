<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Address */

$this->title = $model->address_id;
$this->params['breadcrumbs'][] = ['label' => 'Addresses', 'url' => ['index']];
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
                      <?= Html::a('Update', ['update', 'address_id' => $model->address_id, 'province_id' => $model->province_id, 'country_id' => $model->country_id, 'customer_id' => $model->customer_id], ['class' => 'btn btn-primary']) ?>
                      <?= Html::a('Delete', ['delete', 'address_id' => $model->address_id, 'province_id' => $model->province_id, 'country_id' => $model->country_id, 'customer_id' => $model->customer_id], [
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
                            'address_id',
                            'province.province_name',
                            'country.country_name',
                            'customer.first_name',
                            'address_category',
                            'address_1',
                            'address_2',
                            'postcode',
                            'city',
                            'phone_1',
                            'phone_2',
                            'other',
                            'flag_active:boolean',
                            'date_added',
                            'date_update',
                        ],
                    ]) ?>
              </div>
        </div>
      </div>
  </div>
</div>
