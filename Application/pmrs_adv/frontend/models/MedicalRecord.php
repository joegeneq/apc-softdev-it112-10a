<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "medical_record".
 *
 * @property integer $id
 * @property integer $patient_id
 * @property string $doctor
 * @property integer $breast_cancer_id
 * @property integer $surgery_id
 * @property integer $diagnosis_id
 * @property integer $stages_id
 * @property integer $breast_panel_id
 * @property integer $histolgic_grading_id
 * @property integer $ki_67_id
 * @property integer $treatment_id
 * @property integer $user_id
 *
 * @property Breastcancer $breastCancer
 * @property BreastPanel $breastPanel
 * @property Diagnosis $diagnosis
 * @property HistolgicGrading $histolgicGrading
 * @property Ki67 $ki67
 * @property Patient $patient
 * @property Stages $stages
 * @property Surgery $surgery
 * @property Treatment $treatment
 * @property User $user
 */
class MedicalRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	 
    public static function tableName()
    {
        return 'medical_record';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['patient_id', 'doctor', 'breast_cancer_id', 'user_id'], 'required'],
            [['patient_id', 'breast_cancer_id', 'surgery_id', 'diagnosis_id', 'stages_id', 'breast_panel_id', 'histolgic_grading_id', 'ki_67_id', 'treatment_id', 'user_id'], 'integer'],
            [['doctor'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'patient_id' => 'Patient Name',
            'doctor' => 'Doctor',
            'breast_cancer_id' => 'Breast Cancer ',
            'surgery_id' => 'Surgery ',
            'diagnosis_id' => 'Diagnosis ',
            'stages_id' => 'Stages ID',
            'breast_panel_id' => 'Breast Panel ',
            'histolgic_grading_id' => 'Histolgic Grading ',
            'ki_67_id' => 'Ki 67 ',
            'treatment_id' => 'Treatment ',
            'user_id' => 'User ',
			
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBreastCancer()
    {
        return $this->hasOne(Breastcancer::className(), ['id' => 'breast_cancer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBreastPanel()
    {
        return $this->hasOne(BreastPanel::className(), ['id' => 'breast_panel_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiagnosis()
    {
        return $this->hasOne(Diagnosis::className(), ['id' => 'diagnosis_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistolgicGrading()
    {
        return $this->hasOne(HistolgicGrading::className(), ['id' => 'histolgic_grading_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKi67()
    {
        return $this->hasOne(Ki67::className(), ['id' => 'ki_67_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatient()
    {
        return $this->hasOne(Patient::className(), ['id' => 'patient_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStages()
    {
        return $this->hasOne(Stages::className(), ['id' => 'stages_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSurgery()
    {
        return $this->hasOne(Surgery::className(), ['id' => 'surgery_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTreatment()
    {
        return $this->hasOne(Treatment::className(), ['id' => 'treatment_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
