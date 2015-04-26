<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Surgery */

$this->title = 'Create Surgery';
$this->params['breadcrumbs'][] = ['label' => 'Surgeries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surgery-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
