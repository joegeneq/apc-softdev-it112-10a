<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\BreastPanel */

$this->title = 'Update Breast Panel: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Breast Panels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="breast-panel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
