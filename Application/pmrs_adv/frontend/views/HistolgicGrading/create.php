<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\HistolgicGrading */

$this->title = 'Create Histolgic Grading';
$this->params['breadcrumbs'][] = ['label' => 'Histolgic Gradings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="histolgic-grading-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
