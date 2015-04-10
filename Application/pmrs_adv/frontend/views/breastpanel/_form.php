<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\BreastPanel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="breast-panel-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'breast_panel_name')->textInput(['maxlength' => 100]) ?> --!>
     <?php echo $form->field($model, 'breast_panel_name')->dropDownList(['ER positive-PR positive-Her 2 positive ' => 'ER positive-PR positive-Her 2 positive',
        'ER negative-PR negative-Her 2 negative' => 'ER negative-PR negative-Her 2 negative',
        'ER Positive-PR negative-Her 2 positive'=>'ER Positive-PR negative-Her 2 positive',
        ' ER positive-PR  negative-Her  2  negative'=>'ER positive-PR  negative-Her  2  negative',
        ' ER negative-PR  positive-Her  2  positive'=>'ER negative-PR  positive-Her  2  positive',
        'ER negative-PR  negative-Her  2  positive'=>'ER negative-PR  negative-Her  2  positive',
        'ER positive-PR  positive-Her  2  negative'=>'ER positive-PR  positive-Her  2  negative'
        ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
