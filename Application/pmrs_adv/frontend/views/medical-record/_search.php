<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MedicalRecordSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medical-record-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'patient_id') ?>

    <?= $form->field($model, 'doctor') ?>

    <?= $form->field($model, 'breast_cancer_id') ?>

    <?= $form->field($model, 'surgery_id') ?>

    <?php // echo $form->field($model, 'diagnosis_id'a) ?>

    <?php // echo $form->field($model, 'stages_id') ?>

    <?php // echo $form->field($model, 'breast_panel_id') ?>

    <?php // echo $form->field($model, 'histolgic_grading_id') ?>

    <?php // echo $form->field($model, 'ki_67_id') ?>

    <?php // echo $form->field($model, 'treatment_id') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
