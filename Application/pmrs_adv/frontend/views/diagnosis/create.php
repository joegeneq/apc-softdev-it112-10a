<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Diagnosis */

$this->title = 'Create Diagnosis';
$this->params['breadcrumbs'][] = ['label' => 'Diagnosis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diagnosis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
