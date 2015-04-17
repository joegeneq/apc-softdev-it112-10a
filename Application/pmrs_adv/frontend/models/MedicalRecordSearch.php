<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\MedicalRecord;

/**
 * MedicalRecordSearch represents the model behind the search form about `frontend\models\MedicalRecord`.
 */
class MedicalRecordSearch extends MedicalRecord
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['result', 'patient_id', 'doctor_id', 'breast_cancer_id', 'surgery_id', 'diagnosis_id', 'stages_id', 'breast_panel_id', 'histolgic_grading_id', 'ki_67_id', 'treatment_id'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = MedicalRecord::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        
        $query->joinWith('patient');
        $query->joinWith('doctor');
        $query->joinWith('breastCancer');
        $query->joinWith('surgery');
        $query->joinWith('diagnosis');
        $query->joinWith('stages');
        $query->joinWith('breastPanel');
        $query->joinWith('histolgicGrading');
        $query->joinWith('ki67');
        $query->joinWith('treatment');
      //  $query->andFilterWhere([
//            'id' => $this->id,
//            'patient_id' => $this->patient_id,
//            'doctor_id' => $this->doctor_id,
//            'breast_cancer_id' => $this->breast_cancer_id,
//            'surgery_id' => $this->surgery_id,
//            'diagnosis_id' => $this->diagnosis_id,
//            'stages_id' => $this->stages_id,
//            'breast_panel_id' => $this->breast_panel_id,
//            'histolgic_grading_id' => $this->histolgic_grading_id,
//            'ki_67_id' => $this->ki_67_id,
//            'treatment_id' => $this->treatment_id,
            
      //  ]);
        $query->andFilterWhere(['like','patient.patient_lname', $this->patient_id])
               ->andFilterWhere(['like','doctor.doctor_name', $this->doctor_id])
               ->andFilterWhere(['like','breastCancer.breast_cancer', $this->breast_cancer_id])
                ->andFilterWhere(['like','surgery.surgery_name', $this->surgery_id])
                ->andFilterWhere(['like','diagnosis.diagnosis_name', $this->diagnosis_id])
                ->andFilterWhere(['like','stages.stages', $this->surgery_id])
                ->andFilterWhere(['like','breastPanel.breast_panel_name', $this->breast_panel_id])
                ->andFilterWhere(['like','histolgic_grading.histolgic_grade', $this->histolgic_grading_id])
                ->andFilterWhere(['like','ki_67.ki_67', $this->ki_67_id])
                ->andFilterWhere(['like','treatment.treatment_name', $this->treatment_id])
                ;

        $query->andFilterWhere(['like', 'result', $this->result]);

        return $dataProvider;
    }
}
