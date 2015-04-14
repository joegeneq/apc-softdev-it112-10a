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
            [['id', 'patient_id', 'breast_cancer_id', 'surgery_id', 'diagnosis_id', 'stages_id', 'breast_panel_id', 'histolgic_grading_id', 'ki_67_id', 'treatment_id', 'user_id'], 'integer'],
            [['doctor'], 'safe'],
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

        $query->andFilterWhere([
            'id' => $this->id,
            'patient_id' => $this->patient_id,
            'breast_cancer_id' => $this->breast_cancer_id,
            'surgery_id' => $this->surgery_id,
            'diagnosis_id' => $this->diagnosis_id,
            'stages_id' => $this->stages_id,
            'breast_panel_id' => $this->breast_panel_id,
            'histolgic_grading_id' => $this->histolgic_grading_id,
            'ki_67_id' => $this->ki_67_id,
            'treatment_id' => $this->treatment_id,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'doctor', $this->doctor]);

        return $dataProvider;
    }
}
