<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "diagnosis".
 *
 * @property integer $id
 * @property string $diagnosis_name
 */
class Diagnosis extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'diagnosis';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['diagnosis_name'], 'required'],
            [['diagnosis_name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'diagnosis_name' => 'Diagnosis Name',
        ];
    }
}
