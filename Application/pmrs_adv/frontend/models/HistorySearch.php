<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\History;

/**
 * HistorySearch represents the model behind the search form about `frontend\models\History`.
 */
class HistorySearch extends History
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['dates', 'surgery', 'treatment', 'recurrence_area', 'response', 'patient_id'], 'safe'],
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
        $query = History::find();

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
        $query->andFilterWhere([
            'id' => $this->id,
            'dates' => $this->dates,
          //  'patient_id' => $this->patient_id,
        ]);

        $query->andFilterWhere(['like', 'surgery', $this->surgery])
            ->andFilterWhere(['like', 'treatment', $this->treatment])
            ->andFilterWhere(['like', 'recurrence_area', $this->recurrence_area])
            ->andFilterWhere(['like', 'response', $this->response])
            ->andFilterWhere(['like','patient.patient_lname', $this->patient_id]);

        return $dataProvider;
    }
}
