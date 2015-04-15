<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MedicalRecordSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Medical Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medical-record-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Medical Record', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'doctor',
			 [
                'attribute' => 'patient_id',
                'value' => 'patient.patient_lname' 
            ],

			[
                'attribute' => 'breast_cancer_id',
                'value' => 'breastCancer.breast_cancer' 
            ],
			[
                'attribute' => 'surgery_id',
                'value' => 'surgery.surgery_name' 
            ],
            // 'diagnosis_id',
            // 'stages_id',
            // 'breast_panel_id',
            // 'histolgic_grading_id',
            // 'ki_67_id',
            // 'treatment_id',
            // 'user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
