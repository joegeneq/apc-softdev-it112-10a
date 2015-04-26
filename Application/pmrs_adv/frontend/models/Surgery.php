<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "surgery".
 *
 * @property integer $id
 * @property string $surgery_name
 *
 * @property MedicalRecord[] $medicalRecords
 */
class Surgery extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'surgery';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['surgery_name'], 'required'],
            [['surgery_name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'surgery_name' => 'Surgery Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMedicalRecords()
    {
        return $this->hasMany(MedicalRecord::className(), ['surgery_id' => 'id']);
    }
}
