<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Treatment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="treatment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'treatment_name')->textInput(['maxlength' => 100]) ?>

    <!--<?= $form->field($model, 'category')->textInput(['maxlength' => 100]) ?> --!>
    
     <?php echo $form->field($model, 'category')->dropDownList(['Neoadjuvant' => 'Neoadjuvant', 'Adjuvant' => 'Adjuvant']); ?>
    

    <!--<?= $form->field($model, 'sub_category')->textInput(['maxlength' => 100]) ?>--!>
    <?php echo $form->field($model, 'sub_category')->dropDownList(['Chemotherapy' => 'Chemotherapy', 'Hormonal' => 'Hormonal']); ?>
    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
