<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "treatment".
 *
 * @property integer $id
 * @property string $treatment_name
 * @property string $category
 * @property string $sub_category
 *
 * @property MedicalRecord[] $medicalRecords
 */
class Treatment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'treatment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['treatment_name', 'category'], 'required'],
            [['treatment_name', 'category', 'sub_category'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'treatment_name' => 'Treatment Name',
            'category' => 'Category',
            'sub_category' => 'Sub Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMedicalRecords()
    {
        return $this->hasMany(MedicalRecord::className(), ['treatment_id' => 'id']);
    }
}
