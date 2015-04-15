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
            'id',
            'patient.patient_lname',
            'doctor',
            'breastCancer.breast_cancer',
            'surgery.surgery_name',
            'diagnosis.diagnosis_name',
            'stages.stages',
            'breastPanel.breast_panel_name',
            'histolgicGrading.histolgic_grade',
            'ki67.ki_67',
            'treatment.treatment_name',
            'result',
            'user.username',
        ],
    ]) ?>

</div>
