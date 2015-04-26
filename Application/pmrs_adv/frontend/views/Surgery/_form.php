<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Surgery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surgery-form">

    <?php $form = ActiveForm::begin(); ?>

     <!-- <?= $form->field($model, 'surgery_name')->textInput(['maxlength' => 100]) ?> --!>
          <?php echo $form->field($model, 'surgery_name')->dropDownList(['Lumpectomy Only' => 'Lumpectomy Only', 
              'Lumpectomy with Node Dissection' => 'Lumpectomy with Node Dissection',
              'Subcutaneous Mastectomy'=> 'Subcutaneous Mastectomy',
              'Subcutaneous Mastectomy with Node Dissection'=>'Subcutaneous Mastectomy with Node Dissection',
              'Mastectomy'=>'Mastectomy' , 
              'Modified Radical Mastectomy'=>'Modified Radical Mastectomy']); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
