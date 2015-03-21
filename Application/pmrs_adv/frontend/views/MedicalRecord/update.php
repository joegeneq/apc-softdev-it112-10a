<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\MedicalRecord */

$this->title = 'Update Medical Record: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Medical Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="medical-record-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
