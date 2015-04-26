<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "scedule_details".
 *
 * @property integer $id
 * @property string $event_name
 * @property string $type_of_event
 * @property string $event_startdate
 * @property string $event_enddate
 * @property integer $patient_id
 *
 * @property Patient $patient
 */
class SceduleDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'scedule_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['event_name', 'type_of_event', 'event_startdate', 'event_enddate', 'patient_id'], 'required'],
            [['event_startdate', 'event_enddate'], 'safe'],
            [['patient_id'], 'integer'],
            [['event_name', 'type_of_event'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'event_name' => 'Event Name',
            'type_of_event' => 'Type Of Event',
            'event_startdate' => 'Event Startdate',
            'event_enddate' => 'Event Enddate',
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
