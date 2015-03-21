<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Ki67 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ki67-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ki_67')->textInput(['maxlength' => 35]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
