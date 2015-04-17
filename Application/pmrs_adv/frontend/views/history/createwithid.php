<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use frontend\models\Treatment;
use frontend\models\Surgery;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model frontend\models\History */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="history-form">

    <?php $form = ActiveForm::begin(); ?>

  <!--  <?= $form->field($model, 'dates')->textInput() ?> --!>
    <?= $form->field($model, 'dates')->widget(
        DatePicker::className(), [
           
            'inline' => false,
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]);?>

  <!--  <?= $form->field($model, 'surgery')->textInput(['maxlength' => 255]) ?> -->
     <?php
		$surgery=Surgery::find()->all();
		$listData=ArrayHelper::map($surgery, 'surgery_name', 'surgery_name');
		echo $form->field($model, 'surgery')->dropDownList(
			$listData,['prompt'=>'Select']);
	?>

    <!--<?= $form->field($model, 'treatment')->textInput(['maxlength' => 255]) ?> --!>
   <?php
		$treatment=Treatment::find()->all();
		$listData=ArrayHelper::map($treatment, 'treatment_name', 'treatment_name');
		echo $form->field($model, 'treatment')->dropDownList(
			$listData,['prompt'=>'Select']);
	?>

    <?= $form->field($model, 'recurrence_area')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'response')->textInput(['maxlength' => 255]) ?>
  
  <?= $form->field($model, 'patient_id')->hiddenInput(['value'=>Yii::$app->request->get('id')])->label("") ?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
