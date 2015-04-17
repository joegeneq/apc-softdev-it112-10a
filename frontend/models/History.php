<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "history".
 *
 * @property integer $id
 * @property string $dates
 * @property string $surgery
 * @property string $treatment
 * @property string $recurrence_area
 * @property string $response
 * @property integer $patient_id
 *
 * @property Patient $patient
 */
class History extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'history';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dates', 'surgery', 'treatment', 'recurrence_area', 'response', 'patient_id'], 'required'],
            [['dates'], 'safe'],
            [['patient_id'], 'integer'],
            [['surgery', 'treatment', 'recurrence_area', 'response'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dates' => 'Dates',
            'surgery' => 'Surgery',
            'treatment' => 'Treatment',
            'recurrence_area' => 'Recurrence Area',
            'response' => 'Response',
            'patient_id' => 'Patient Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatient()
    {
        return $this->hasOne(Patient::className(), ['id' => 'patient_id']);
    }
}
