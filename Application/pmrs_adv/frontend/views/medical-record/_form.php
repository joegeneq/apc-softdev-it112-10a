<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Patient;
use yii\helpers\ArrayHelper;
use frontend\models\Stages;
use frontend\models\Diagnosis;
use frontend\models\Treatment;
use frontend\models\BreastPanel;
use frontend\models\Ki67;
use frontend\models\Surgery;
use frontend\models\HistolgicGrading;
use frontend\models\BreastCancer;

/* @var $this yii\web\View */
/* @var $model frontend\models\MedicalRecord */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medical-record-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

  
	
	<?php
		$patients=Patient::find()->all();
		$listData=ArrayHelper::map($patients, 'id', 'fullName');
		echo $form->field($model, 'patient_id')->dropDownList(
			$listData,['prompt'=>'Select']);
	?>


    <?php
		$doctor=  frontend\models\Doctor::find()->all();
		$listData=ArrayHelper::map($doctor, 'id', 'doctor_name');
		echo $form->field($model, 'doctor_id')->dropDownList(
			$listData,['prompt'=>'Select']);
	?>

  <?php
		$surgery=Surgery::find()->all();
		$listData=ArrayHelper::map($surgery, 'id', 'surgery_name');
		echo $form->field($model, 'surgery_id')->dropDownList(
			$listData,['prompt'=>'Select']);
	?>

	    <?php
		$diagnosis=BreastCancer::find()->all();
		$listData=ArrayHelper::map($diagnosis, 'id', 'breast_cancer');
		echo $form->field($model, 'breast_cancer_id')->dropDownList(
			$listData,['prompt'=>'Select']);
	?>
	
    <?php
		$diagnosis=Diagnosis::find()->all();
		$listData=ArrayHelper::map($diagnosis, 'id', 'diagnosis_name');
		echo $form->field($model, 'diagnosis_id')->dropDownList(
			$listData,['prompt'=>'Select']);
	?>

    <?php
		$stages=Stages::find()->all();
		$listData=ArrayHelper::map($stages, 'id', 'stages');
		echo $form->field($model, 'stages_id')->dropDownList(
			$listData,['prompt'=>'Select']);
	?>

    <?php
		$breastPanel=BreastPanel::find()->all();
		$listData=ArrayHelper::map($breastPanel, 'id', 'breast_panel_name');
		echo $form->field($model, 'breast_panel_id')->dropDownList(
			$listData,['prompt'=>'Select']);
	?>

	 <?php
		$histolgicGrading=HistolgicGrading::find()->all();
		$listData=ArrayHelper::map($histolgicGrading, 'id', 'histolgic_grade');
		echo $form->field($model, 'histolgic_grading_id')->dropDownList(
			$listData,['prompt'=>'Select']);
	?>
	
    <?php
		$ki67=Ki67::find()->all();
		$listData=ArrayHelper::map($ki67, 'id', 'ki_67');
		echo $form->field($model, 'ki_67_id')->dropDownList(
			$listData,['prompt'=>'Select']);
	?>

    <?php
		$treatment=Treatment::find()->all();
		$listData=ArrayHelper::map($treatment, 'id', 'treatment_name');
		echo $form->field($model, 'treatment_id')->dropDownList(
			$listData,['prompt'=>'Select']);
	?>
    
     <?= $form->field($model, 'file')->fileInput(); ?>
    
      <?= $form->field($model, 'file2')->fileInput(); ?>
      <?= $form->field($model, 'file3')->fileInput(); ?>
      <?= $form->field($model, 'file4')->fileInput(); ?>
      <?= $form->field($model, 'file5')->fileInput(); ?>    

    <?= $form->field($model, 'result')->textInput(['maxlength' => 255]) ?>
    
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
