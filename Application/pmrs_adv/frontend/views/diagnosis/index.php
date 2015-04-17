<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DiagnosisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Diagnosis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diagnosis-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Diagnosis', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
            'diagnosis_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
