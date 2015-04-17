<script type="text/javascript">
<!--//
function sizeFrame(frameId) {

var F = document.getElementById(frameId);
if(F.contentDocument) {
F.height = F.contentDocument.documentElement.scrollHeight+30; //FF 3.0.11, Opera 9.63, and Chrome
} else {



F.height = F.contentWindow.document.body.scrollHeight+30; //IE6, IE7 and Chrome

}

}

// window.onload=sizeFrame; 

//-->
</script>

<?php

use yii\helpers\Html;
//use yii\widgets\DetailView;
use kartik\detail\DetailView;
use common\models\UserMain;
use common\models\ServiceList;


/* @var $this yii\web\View */
/* @var $model frontend\models\Patient */

$this->title = $model->fullName;
$this->params['breadcrumbs'][] = ['label' => 'Patients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patient-view">

    <h1><?= Html::encode($model->FullName) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Create History', ['history/createwithid', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Create Medical Record', ['medical-record/createwithid', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
    </p>

    
   
    
    
    
     <?php 
        $attributes = [
            [
            'group'=>true,
            'label'=>'Patient Information',
            'rowOptions'=>['class'=>'info'],
            //'groupOptions'=>['class'=>'text-center']
            ],

             'patient_date',
            'FullName',
            'patient_age',
             'patient_dob',
            'patient_address',
            'patient_g',
            'patient_p',
            'patient_lmp',
            'patient_tel',
            'patient_cell_no',
            'patient_family_history',
            'patient_menarche',
           'patient_history',
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
            
            [
                'group'=>true,
                'label'=>'History',
                'rowOptions'=>['class'=>'info'],
                //'groupOptions'=>['class'=>'text-center']
            ],
        ]
    ?>
    
    <?php
        echo DetailView::widget([
        'model'=>$model,
        'condensed'=>true,
        'hover'=>true,
        'mode'=>DetailView::MODE_VIEW,
        'panel'=>false,
        'attributes'=> $attributes,
        ]);
    ?>
   
    

</div>
