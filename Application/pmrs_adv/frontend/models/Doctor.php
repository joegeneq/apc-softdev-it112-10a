<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "doctor".
 *
 * @property integer $id
 * @property string $doctor_name
 * @property string $contact_no
 * @property string $email
 *
 * @property MedicalRecord[] $medicalRecords
 */
class Doctor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'doctor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['doctor_name', 'contact_no', 'email'], 'required'],
            [['doctor_name'], 'string', 'max' => 255],
            [['contact_no'], 'string', 'max' => 13],
            [['email'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'doctor_name' => 'Doctor Name',
            'contact_no' => 'Contact No',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMedicalRecords()
    {
        return $this->hasMany(MedicalRecord::className(), ['doctor_id' => 'id']);
    }
}
