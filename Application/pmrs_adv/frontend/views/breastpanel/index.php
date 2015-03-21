<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\BreastPanelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Breast Panels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="breast-panel-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Breast Panel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'breast_panel_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
