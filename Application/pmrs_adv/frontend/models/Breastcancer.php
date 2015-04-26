<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "breastcancer".
 *
 * @property integer $id
 * @property string $breast_cancer
 *
 * @property MedicalRecord[] $medicalRecords
 */
class Breastcancer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'breastcancer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['breast_cancer'], 'required'],
            [['breast_cancer'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'breast_cancer' => 'Breast Cancer',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMedicalRecords()
    {
        return $this->hasMany(MedicalRecord::className(), ['breast_cancer_id' => 'id']);
    }
}
