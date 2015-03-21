<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Patient */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Patients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patient-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'patient_lname',
            'patient_fname',
            'patient_mname',
            'patient_address',
            'patient_ref_by',
            'patient_family_history',
            'patient_menarche',
            'patient_allergy',
            'patient_dx',
            'patient_nodes',
            'patient_hgr',
            'patient_ngr',
            'patient_stage',
            'patient_er',
            'patient_pr',
            'patient_her_two_m',
            'patient_k_67',
            'patient_metastic',
            'patient_date',
            'patient_age',
            'patient_dob',
            'patient_tel',
            'patient_cell_no',
        ],
    ]) ?>

</div>
