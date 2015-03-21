<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PatientSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patient-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'patient_lname') ?>

    <?= $form->field($model, 'patient_fname') ?>

    <?= $form->field($model, 'patient_mname') ?>

    <?= $form->field($model, 'patient_address') ?>

    <?php // echo $form->field($model, 'patient_ref_by') ?>

    <?php // echo $form->field($model, 'patient_family_history') ?>

    <?php // echo $form->field($model, 'patient_menarche') ?>

    <?php // echo $form->field($model, 'patient_allergy') ?>

    <?php // echo $form->field($model, 'patient_dx') ?>

    <?php // echo $form->field($model, 'patient_nodes') ?>

    <?php // echo $form->field($model, 'patient_hgr') ?>

    <?php // echo $form->field($model, 'patient_ngr') ?>

    <?php // echo $form->field($model, 'patient_stage') ?>

    <?php // echo $form->field($model, 'patient_er') ?>

    <?php // echo $form->field($model, 'patient_pr') ?>

    <?php // echo $form->field($model, 'patient_her_two_m') ?>

    <?php // echo $form->field($model, 'patient_k_67') ?>

    <?php // echo $form->field($model, 'patient_metastic') ?>

    <?php // echo $form->field($model, 'patient_date') ?>

    <?php // echo $form->field($model, 'patient_age') ?>

    <?php // echo $form->field($model, 'patient_dob') ?>

    <?php // echo $form->field($model, 'patient_tel') ?>

    <?php // echo $form->field($model, 'patient_cell_no') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
