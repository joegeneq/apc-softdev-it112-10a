<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


/* @var $this yii\web\View */
/* @var $model frontend\models\MedicalRecord */

$this->title = $model->patient->fullName;
$this->params['breadcrumbs'][] = ['label' => 'Medical Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medical-record-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
            'patient.fullName',
            'doctor.doctor_name',
            'breastCancer.breast_cancer',
            'surgery.surgery_name',
            'diagnosis.diagnosis_name',
            'stages.stages',
            'breastPanel.breast_panel_name',
            'histolgicGrading.histolgic_grade',
            'ki67.ki_67',
            'treatment.treatment_name',
            'result',
           // 'mammogram',
             ['value' =>Html::a(str_replace('web/images/', "", $model->mammogram),''.$model->mammogram), 'attribute' => 'mammogram', 'format' => 'raw'],
            ['value' =>Html::a(str_replace('web/images/', "", $model->ultrasound),''.$model->ultrasound), 'attribute' => 'ultrasound', 'format' => 'raw'],
             ['value' =>Html::a(str_replace('web/images/', "", $model->ct_scan),''.$model->ct_scan), 'attribute' => 'ct_scan', 'format' => 'raw'],
             ['value' =>Html::a(str_replace('web/images/', "", $model->bone_scan),''.$model->bone_scan), 'attribute' => 'bone_scan', 'format' => 'raw'],
             ['value' =>Html::a(str_replace('web/images/', "", $model->lab_rep),''.$model->lab_rep), 'attribute' => 'lab_rep', 'format' => 'raw'],
            
        ],
    ]) ?>
    
   
    

</div>
