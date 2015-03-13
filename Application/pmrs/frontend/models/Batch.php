<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "batch".
 *
 * @property integer $id
 * @property integer $batch_code
 * @property string $batch_year
 */
class Batch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'batch';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['batch_code', 'batch_year'], 'required'],
            [['batch_code'], 'integer'],
            [['batch_year'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'batch_code' => 'Batch Code',
            'batch_year' => 'Batch Year',
        ];
    }
}
