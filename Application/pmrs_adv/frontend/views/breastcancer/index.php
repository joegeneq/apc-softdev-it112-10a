<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\BreastcancerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Breastcancers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="breastcancer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Breastcancer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'breast_cancer',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
