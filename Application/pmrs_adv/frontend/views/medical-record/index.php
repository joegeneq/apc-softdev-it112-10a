<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MedicalRecordSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Medical Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medical-record-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Medical Record', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
          //  'patient_id',
             [
                'attribute' => 'patient_id',
                'value' => 'patient.fullName' 
            ],
            [
                'attribute' => 'breast_cancer_id',
                'value' => 'breastCancer.breast_cancer' 
            ],
            [
                'attribute' => 'surgery_id',
                'value' => 'surgery.surgery_name' 
            ],
             [
                'attribute' => 'doctor_id',
                'value' => 'doctor.doctor_name' 
            ],
            //'doctor_id',
             [
                'attribute' => 'diagnosis_id',
                'value' => 'diagnosis.diagnosis_name' 
            ],
            
            [
                'attribute' => 'stages_id',
                'value' => 'stages.stages' 
            ],
              [
                'attribute' => 'breast_panel_id',
                'value' => 'breastPanel.breast_panel_name' 
            ],
            
             [
                'attribute' => 'histolgic_grading_id',
                'value' => 'histolgicGrading.histolgic_grade' 
            ],
            [
                'attribute' => 'ki_67_id',
                'value' => 'ki67.ki_67' 
            ],
             [
                'attribute' => 'treatment_id',
                'value' => 'treatment.treatment_name' 
            ],
           // 'breast_cancer_id',
           // 'surgery_id',
            // 'diagnosis_id',
            // 'stages_id',
            // 'breast_panel_id',
            // 'histolgic_grading_id',
            // 'ki_67_id',
            // 'treatment_id',
             'result',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
