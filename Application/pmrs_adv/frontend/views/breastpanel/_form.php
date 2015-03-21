<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\BreastPanel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="breast-panel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'breast_panel_name')->textInput(['maxlength' => 100]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
