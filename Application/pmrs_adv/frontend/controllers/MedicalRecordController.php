<?php

namespace frontend\controllers;

use Yii;
use frontend\models\MedicalRecord;
use frontend\models\MedicalRecordSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * MedicalRecordController implements the CRUD actions for MedicalRecord model.
 */
class MedicalRecordController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all MedicalRecord models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MedicalRecordSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MedicalRecord model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new MedicalRecord model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MedicalRecord();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
              $model->file = UploadedFile::getInstance($model,'file');
              $model->file2 = UploadedFile::getInstance($model,'file2');
              $model->file3 = UploadedFile::getInstance($model,'file3');
              $model->file4 = UploadedFile::getInstance($model,'file4');
              $model->file5 = UploadedFile::getInstance($model,'file5');
              
              
              if($model->file != null){
                    $fileName = $model->file->name;
                    $fileName2 = $model->file2->name;
                    $fileName3 = $model->file3->name;
                    $fileName4 = $model->file4->name;
                    $fileName5 = $model->file5->name;
                    
                    $model->file->saveAs('images/'. $fileName);
                      $model->file2->saveAs('images/'. $fileName2);
                        $model->file3->saveAs('images/'. $fileName3);
                          $model->file4->saveAs('images/'. $fileName4);
                            $model->file5->saveAs('images/'. $fileName5);
                          
                    $model->mammogram = 'images/'. $fileName;
                     $model->ultrasound = 'images/'. $fileName2;
                      $model->ct_scan = 'images/'. $fileName3;
                       $model->bone_scan = 'images/'. $fileName4;
                        $model->lab_rep = 'images/'. $fileName5;
                       
                }
                    $model->save();
                    
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
    
    public function actionCreatewithid()
    {
        $model = new MedicalRecord();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['patient/view', 'id' => $model->id]);
        } else {
            return $this->render('createwithid', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing MedicalRecord model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing MedicalRecord model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MedicalRecord model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MedicalRecord the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MedicalRecord::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
