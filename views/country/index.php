<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CountrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Countries';
$this->params['breadcrumbs'][] = $this->title;
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
                      <?= Html::a('Create Country', ['create'], ['class' => 'btn btn-success']) ?>
                  </p>
                  <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            'country_id',
                            'country_name',
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


