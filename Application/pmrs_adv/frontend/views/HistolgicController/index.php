<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\HistolgicGradingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Histolgic Gradings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="histolgic-grading-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Histolgic Grading', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'histolgic_grade',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
