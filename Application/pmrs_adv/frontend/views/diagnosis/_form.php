<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Diagnosis */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="diagnosis-form">

    <?php $form = ActiveForm::begin(); ?>

   <!-- <?= $form->field($model, 'diagnosis_name')->textInput(['maxlength' => 100]) ?> --!>
   
   <?php echo $form->field($model, 'diagnosis_name')->dropDownList(['Invasive Ductal CA ' => 'Invasive Ductal CA ',
        'Invasive Lobular CA' => 'Invasive Lobular CA',
        'Ductal Carcinoma-in-situ  (DCIS) without Comedo'=>'Ductal Carcinoma-in-situ  (DCIS) without Comedo',
        'Ductal Carcinoma-in-situ  (DCIS) with Comedo'=>'Ductal Carcinoma-in-situ  (DCIS) with Comedo',
        'Lobular Carcinoma-in-situ (LCIS)'=>'Lobular Carcinoma-in-situ (LCIS)',
        'Mucinous CA'=>'Mucinous CA',
        'Papillary CA'=>'Papillary CA',
        'Tubular CA'=>'Tubular CA',
       'Medullary CA'=>'Medullary CA']); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
