<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Breastcancer */

$this->title = 'Create Breastcancer';
$this->params['breadcrumbs'][] = ['label' => 'Breastcancers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="breastcancer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
