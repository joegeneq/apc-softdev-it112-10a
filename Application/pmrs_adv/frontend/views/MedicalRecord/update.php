<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\MedicalRecord */

$this->title = 'Update Medical Record: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Medical Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'patient_id' => $model->patient_id, 'stages_id' => $model->stages_id, 'diagnosis_id' => $model->diagnosis_id, 'breast_panel_id' => $model->breast_panel_id, 'ki_67_id' => $model->ki_67_id, 'surgery_id' => $model->surgery_id, 'user_id' => $model->user_id, 'histolgic_grading_id' => $model->histolgic_grading_id, 'treatment_id' => $model->treatment_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="medical-record-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
