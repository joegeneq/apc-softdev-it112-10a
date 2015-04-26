<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PatientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Patients';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patient-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Patient', ['create'], ['class' => 'btn btn-success']) ?>
    
        <?= Html::a('Create History', ['history/create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('View All History', ['history/index'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

        //    'id',
            'patient_lname',
            'patient_fname',
            'patient_mname',
            'patient_address',
          
            // 'patient_family_history',
            // 'patient_menarche',
            // 'patient_allergy',
            // 'patient_dx',
            // 'patient_nodes',
            // 'patient_hgr',
            // 'patient_ngr',
            // 'patient_stage',
            // 'patient_er',
            // 'patient_pr',
            // 'patient_her_two_m',
            // 'patient_k_67',
            // 'patient_metastic',
            // 'patient_date',
            // 'patient_age',
            // 'patient_dob',
            // 'patient_tel',
            // 'patient_cell_no',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
