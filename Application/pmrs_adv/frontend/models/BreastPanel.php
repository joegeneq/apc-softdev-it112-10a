<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "breast_panel".
 *
 * @property integer $id
 * @property string $breast_panel_name
 */
class BreastPanel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'breast_panel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['breast_panel_name'], 'required'],
            [['breast_panel_name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'breast_panel_name' => 'Breast Panel Name',
        ];
    }
}
