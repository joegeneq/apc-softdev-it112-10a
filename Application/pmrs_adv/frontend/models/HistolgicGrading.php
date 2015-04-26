<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "histolgic_grading".
 *
 * @property integer $id
 * @property string $histolgic_grade
 */
class HistolgicGrading extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'histolgic_grading';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['histolgic_grade'], 'required'],
            [['histolgic_grade'], 'string', 'max' => 35]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'histolgic_grade' => 'Histolgic Grade',
        ];
    }
}
