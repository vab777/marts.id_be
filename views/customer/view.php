<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Customer */

$this->title = $model->customer_id;
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="pull-left breadcrumb_admin clear_both">
    <div class="pull-left page_title theme_color">
      <h1><?= Html::encode($this->title) ?></h1>
      <h1><?= $this->title = 'Customer';?></h1>
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
                        <?= Html::a('Update', ['update', 'id' => $model->customer_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->customer_id], [
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
                            'customer_id',
                            'cust_group_id',
                            'first_name',
                            'last_name',
                            'salutation',
                            'gender',
                            'email:email',
                            'password',
                            'last_password_gen',
                            'mobile_phone',
                            'birthday',
                            'flag_newsletter:boolean',
                            'ip_add_newsletter',
                            'note',
                            'last_visit',
                            'status',
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
