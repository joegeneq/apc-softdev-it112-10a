<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TreatmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Treatments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="treatment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Treatment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'treatment_name',
            'category',
            'sub_category',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
