<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\SceduleDetails */

$this->title = 'Create Scedule Details';
$this->params['breadcrumbs'][] = ['label' => 'Scedule Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scedule-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
