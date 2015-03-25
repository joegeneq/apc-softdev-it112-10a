<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MedicalRecord */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medical-record-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'patient_id')->textInput() ?>

    <?= $form->field($model, 'stages_id')->textInput() ?>

    <?= $form->field($model, 'diagnosis_id')->textInput() ?>

    <?= $form->field($model, 'breast_panel_id')->textInput() ?>

    <?= $form->field($model, 'ki_67_id')->textInput() ?>

    <?= $form->field($model, 'surgery_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'histolgic_grading_id')->textInput() ?>

    <?= $form->field($model, 'treatment_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
