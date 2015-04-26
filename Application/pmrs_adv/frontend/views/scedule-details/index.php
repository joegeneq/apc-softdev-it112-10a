<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SceduleDetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Scedule Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scedule-details-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Scedule Details', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'event_name',
            'type_of_event',
            'event_startdate',
            'event_enddate',
            // 'patient_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
