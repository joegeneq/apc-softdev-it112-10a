<?php

namespace frontend\controllers;

use Yii;
use frontend\models\MedicalRecord;
use frontend\models\MedicalRecordSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

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
     * @param integer $patient_id
     * @param integer $stages_id
     * @param integer $diagnosis_id
     * @param integer $breast_panel_id
     * @param integer $ki_67_id
     * @param integer $surgery_id
     * @param integer $user_id
     * @param integer $histolgic_grading_id
     * @param integer $treatment_id
     * @return mixed
     */
    public function actionView($id, $patient_id, $stages_id, $diagnosis_id, $breast_panel_id, $ki_67_id, $surgery_id, $user_id, $histolgic_grading_id, $treatment_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $patient_id, $stages_id, $diagnosis_id, $breast_panel_id, $ki_67_id, $surgery_id, $user_id, $histolgic_grading_id, $treatment_id),
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
            return $this->redirect(['view', 'id' => $model->id, 'patient_id' => $model->patient_id, 'stages_id' => $model->stages_id, 'diagnosis_id' => $model->diagnosis_id, 'breast_panel_id' => $model->breast_panel_id, 'ki_67_id' => $model->ki_67_id, 'surgery_id' => $model->surgery_id, 'user_id' => $model->user_id, 'histolgic_grading_id' => $model->histolgic_grading_id, 'treatment_id' => $model->treatment_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing MedicalRecord model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $patient_id
     * @param integer $stages_id
     * @param integer $diagnosis_id
     * @param integer $breast_panel_id
     * @param integer $ki_67_id
     * @param integer $surgery_id
     * @param integer $user_id
     * @param integer $histolgic_grading_id
     * @param integer $treatment_id
     * @return mixed
     */
    public function actionUpdate($id, $patient_id, $stages_id, $diagnosis_id, $breast_panel_id, $ki_67_id, $surgery_id, $user_id, $histolgic_grading_id, $treatment_id)
    {
        $model = $this->findModel($id, $patient_id, $stages_id, $diagnosis_id, $breast_panel_id, $ki_67_id, $surgery_id, $user_id, $histolgic_grading_id, $treatment_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'patient_id' => $model->patient_id, 'stages_id' => $model->stages_id, 'diagnosis_id' => $model->diagnosis_id, 'breast_panel_id' => $model->breast_panel_id, 'ki_67_id' => $model->ki_67_id, 'surgery_id' => $model->surgery_id, 'user_id' => $model->user_id, 'histolgic_grading_id' => $model->histolgic_grading_id, 'treatment_id' => $model->treatment_id]);
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
     * @param integer $patient_id
     * @param integer $stages_id
     * @param integer $diagnosis_id
     * @param integer $breast_panel_id
     * @param integer $ki_67_id
     * @param integer $surgery_id
     * @param integer $user_id
     * @param integer $histolgic_grading_id
     * @param integer $treatment_id
     * @return mixed
     */
    public function actionDelete($id, $patient_id, $stages_id, $diagnosis_id, $breast_panel_id, $ki_67_id, $surgery_id, $user_id, $histolgic_grading_id, $treatment_id)
    {
        $this->findModel($id, $patient_id, $stages_id, $diagnosis_id, $breast_panel_id, $ki_67_id, $surgery_id, $user_id, $histolgic_grading_id, $treatment_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MedicalRecord model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $patient_id
     * @param integer $stages_id
     * @param integer $diagnosis_id
     * @param integer $breast_panel_id
     * @param integer $ki_67_id
     * @param integer $surgery_id
     * @param integer $user_id
     * @param integer $histolgic_grading_id
     * @param integer $treatment_id
     * @return MedicalRecord the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $patient_id, $stages_id, $diagnosis_id, $breast_panel_id, $ki_67_id, $surgery_id, $user_id, $histolgic_grading_id, $treatment_id)
    {
        if (($model = MedicalRecord::findOne(['id' => $id, 'patient_id' => $patient_id, 'stages_id' => $stages_id, 'diagnosis_id' => $diagnosis_id, 'breast_panel_id' => $breast_panel_id, 'ki_67_id' => $ki_67_id, 'surgery_id' => $surgery_id, 'user_id' => $user_id, 'histolgic_grading_id' => $histolgic_grading_id, 'treatment_id' => $treatment_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
