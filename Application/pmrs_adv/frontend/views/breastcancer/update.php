<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Breastcancer */

$this->title = 'Update Breastcancer: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Breastcancers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="breastcancer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
