<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SurgerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surgeries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surgery-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Surgery', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'surgery_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
