<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "patient".
 *
 * @property integer $id
 * @property string $patient_lname
 * @property string $patient_fname
 * @property string $patient_mname
 * @property string $patient_address
 * @property string $patient_ref_by
 * @property string $patient_family_history
 * @property string $patient_menarche
 * @property string $patient_allergy
 * @property string $patient_dx
 * @property string $patient_nodes
 * @property string $patient_hgr
 * @property string $patient_ngr
 * @property string $patient_stage
 * @property string $patient_er
 * @property string $patient_pr
 * @property string $patient_her_two_m
 * @property string $patient_k_67
 * @property string $patient_metastic
 * @property string $patient_date
 * @property integer $patient_age
 * @property string $patient_dob
 * @property string $patient_tel
 * @property string $patient_cell_no
 *
 * @property MedicalRecord[] $medicalRecords
 */
class Patient extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'patient';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['patient_lname', 'patient_fname', 'patient_mname', 'patient_address', 'patient_ref_by', 'patient_family_history', 'patient_menarche', 'patient_allergy', 'patient_dx', 'patient_nodes', 'patient_hgr', 'patient_ngr', 'patient_stage', 'patient_er', 'patient_pr', 'patient_her_two_m', 'patient_k_67', 'patient_metastic', 'patient_date', 'patient_age', 'patient_dob', 'patient_tel', 'patient_cell_no'], 'required'],
            [['patient_date'], 'safe'],
            [['patient_age'], 'integer'],
            [['patient_lname', 'patient_fname', 'patient_mname', 'patient_address', 'patient_ref_by', 'patient_family_history', 'patient_menarche', 'patient_allergy', 'patient_dx', 'patient_nodes', 'patient_hgr', 'patient_ngr', 'patient_stage', 'patient_er', 'patient_pr', 'patient_her_two_m', 'patient_k_67', 'patient_metastic', 'patient_dob', 'patient_tel', 'patient_cell_no'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'patient_lname' => 'Last Name',
            'patient_fname' => 'First Name',
            'patient_mname' => 'Middle Name',
            'patient_address' => 'Address',
            'patient_ref_by' => 'Referred By',
            'patient_family_history' => 'Family History',
            'patient_menarche' => 'Menarche',
            'patient_allergy' => 'Allergy',
            'patient_dx' => 'Patient Dx',
            'patient_nodes' => 'Nodes',
            'patient_hgr' => 'Patient Hgr',
            'patient_ngr' => 'Patient Ngr',
            'patient_stage' => 'Stage',
            'patient_er' => 'Patient Er',
            'patient_pr' => 'Patient Pr',
            'patient_her_two_m' => 'Patient Her Two M',
            'patient_k_67' => 'K 67',
            'patient_metastic' => 'Metastic',
            'patient_date' => 'Date',
            'patient_age' => 'Age',
            'patient_dob' => 'Dob',
            'patient_tel' => 'Tel No.',
            'patient_cell_no' => 'Cellphone No',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMedicalRecords()
    {
        return $this->hasMany(MedicalRecord::className(), ['patient_id' => 'id']);
    }
    
    
    public function getFullName()
	{
		return $this->patient_lname . ", ". $this->patient_fname. " ".$this->patient_mname ;
                
	}
}

    