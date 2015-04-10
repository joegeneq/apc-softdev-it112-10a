<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Operations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <center>
    <table>
            <tr>
                <th>Create</th>
            </tr>
            <tr>
                <td> <p>
        <?= Html::a('Breast Panel', ['/breastpanel/create'], ['class' => 'btn btn-success']) ?>
    </p>
                
                </td>
                <td> <p>
        <?= Html::a('Treatment', ['/treatment/create'], ['class' => 'btn btn-danger']) ?>
    </p>
                
                </td>
                <td> <p>
        <?= Html::a('Diagnosis', ['/diagnosis/create'], ['class' => 'btn btn-primary']) ?>
    </p>
                
                </td>
                <td> <p>
        <?= Html::a('Surgery', ['/surgery/create'], ['class' => 'btn btn-danger']) ?>
    </p>
                
                </td>
                <td> <p>
        <?= Html::a('Stages', ['/stages/create'], ['class' => 'btn btn-success']) ?>
    </p>
                
                </td>
                <td>
     <p>
        <?= Html::a('Ki67', ['/ki67/create'], ['class' => 'btn btn-primary']) ?>
    </p>
                
                </td>
            </tr>
            

    </table>
        <table>
     <tr>
                <th>View Data</th>
            </tr>
            <tr>
                <td> <p>
        <?= Html::a('Breast Panel', ['/breastpanel/index'], ['class' => 'btn btn-success']) ?>
    </p>
                
                </td>
                <td> <p>
        <?= Html::a('Treatment', ['/treatment/index'], ['class' => 'btn btn-danger']) ?>
    </p>
                
                </td>
                <td> <p>
        <?= Html::a('Diagnosis', ['/diagnosis/index'], ['class' => 'btn btn-primary']) ?>
    </p>
                
                </td>
                <td> <p>
        <?= Html::a('Surgery', ['/surgery/index'], ['class' => 'btn btn-danger']) ?>
    </p>
                
                </td>
                <td> <p>
        <?= Html::a('Stages', ['/stages/index'], ['class' => 'btn btn-success']) ?>
    </p>
                
                </td>
                <td>
     <p>
        <?= Html::a('Ki67', ['/ki67/index'], ['class' => 'btn btn-primary']) ?>
    </p>
                
                </td>
            </tr>
            
    <hr>
    <table>
        
        
        
    </table>
  </center>
    
    
    
    
   
    
    
    
    
    
    
    

    
    
     
    
    
</div>
