<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Ki67 */

$this->title = 'Create Ki67';
$this->params['breadcrumbs'][] = ['label' => 'Ki67s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ki67-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
