<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Patient;

/**
 * PatientSearch represents the model behind the search form about `frontend\models\Patient`.
 */
class PatientSearch extends Patient
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'patient_age'], 'integer'],
            [['patient_lname', 'patient_fname', 'patient_mname', 'patient_address',  'patient_family_history', 'patient_menarche', 'patient_allergy', 'patient_dx', 'patient_nodes', 'patient_hgr', 'patient_ngr', 'patient_stage', 'patient_er', 'patient_pr', 'patient_her_two_m', 'patient_k_67', 'patient_metastic', 'patient_date', 'patient_dob', 'patient_tel', 'patient_cell_no'], 'safe'],
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
        $query = Patient::find();

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
            'patient_date' => $this->patient_date,
            'patient_age' => $this->patient_age,
        ]);

        $query->andFilterWhere(['like', 'patient_lname', $this->patient_lname])
            ->andFilterWhere(['like', 'patient_fname', $this->patient_fname])
            ->andFilterWhere(['like', 'patient_mname', $this->patient_mname])
            ->andFilterWhere(['like', 'patient_address', $this->patient_address])
            ->andFilterWhere(['like', 'patient_family_history', $this->patient_family_history])
            ->andFilterWhere(['like', 'patient_menarche', $this->patient_menarche])
            ->andFilterWhere(['like', 'patient_allergy', $this->patient_allergy])
            ->andFilterWhere(['like', 'patient_dx', $this->patient_dx])
            ->andFilterWhere(['like', 'patient_nodes', $this->patient_nodes])
            ->andFilterWhere(['like', 'patient_hgr', $this->patient_hgr])
            ->andFilterWhere(['like', 'patient_ngr', $this->patient_ngr])
            ->andFilterWhere(['like', 'patient_stage', $this->patient_stage])
            ->andFilterWhere(['like', 'patient_er', $this->patient_er])
            ->andFilterWhere(['like', 'patient_pr', $this->patient_pr])
            ->andFilterWhere(['like', 'patient_her_two_m', $this->patient_her_two_m])
            ->andFilterWhere(['like', 'patient_k_67', $this->patient_k_67])
            ->andFilterWhere(['like', 'patient_metastic', $this->patient_metastic])
            ->andFilterWhere(['like', 'patient_dob', $this->patient_dob])
            ->andFilterWhere(['like', 'patient_tel', $this->patient_tel])
            ->andFilterWhere(['like', 'patient_cell_no', $this->patient_cell_no]);

        return $dataProvider;
    }
}
