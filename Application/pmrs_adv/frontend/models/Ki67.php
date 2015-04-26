<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ki_67".
 *
 * @property integer $id
 * @property string $ki_67
 */
class Ki67 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ki_67';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ki_67'], 'required'],
            [['ki_67'], 'string', 'max' => 35]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ki_67' => 'Ki 67',
        ];
    }
}
