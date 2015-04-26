<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\HistolgicGrading */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="histolgic-grading-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'histolgic_grade')->textInput(['maxlength' => 35]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
