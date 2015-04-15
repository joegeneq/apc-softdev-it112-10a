<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use frontend\models\Patient;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model frontend\models\SceduleDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="scedule-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'event_name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'type_of_event')->textInput(['maxlength' => 255]) ?>
    
   
    <?php
		$patient= Patient::find()->all();
		$listData=ArrayHelper::map($patient, 'id', 'fullName');
		echo $form->field($model, 'patient_id')->dropDownList(
			$listData,['prompt'=>'Select']);
	?>
   
    <!--<?= $form->field($model, 'event_startdate')->textInput() ?>-->
    <?= $form->field($model, 'event_startdate')->widget(
        DatePicker::className(), [
           
            'inline' => false,
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]);?>

    <!--<?= $form->field($model, 'event_enddate')->textInput() ?>-->
<?= $form->field($model, 'event_enddate')->widget(
        DatePicker::className(), [
           
            'inline' => false,
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]);?>
   <!-- <?= $form->field($model, 'patient_id')->textInput() ?> -->
   
   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
