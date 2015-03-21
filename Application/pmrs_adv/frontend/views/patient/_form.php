<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Patient */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patient-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'patient_lname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_fname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_mname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_address')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_ref_by')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_family_history')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_menarche')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_allergy')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_dx')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_nodes')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_hgr')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_ngr')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_stage')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_er')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_pr')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_her_two_m')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_k_67')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_metastic')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_date')->textInput() ?>

    <?= $form->field($model, 'patient_age')->textInput() ?>

    <?= $form->field($model, 'patient_dob')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_tel')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_cell_no')->textInput(['maxlength' => 45]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
