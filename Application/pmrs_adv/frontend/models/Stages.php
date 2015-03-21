<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "stages".
 *
 * @property integer $id
 * @property string $stages
 *
 * @property MedicalRecord[] $medicalRecords
 */
class Stages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['stages'], 'required'],
            [['stages'], 'string', 'max' => 35]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'stages' => 'Stages',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMedicalRecords()
    {
        return $this->hasMany(MedicalRecord::className(), ['stages_id' => 'id']);
    }
}
