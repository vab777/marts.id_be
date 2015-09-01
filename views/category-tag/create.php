<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CategoryTag */

$this->title = 'Create Category Tag';
$this->params['breadcrumbs'][] = ['label' => 'Category Tags', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-tag-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
