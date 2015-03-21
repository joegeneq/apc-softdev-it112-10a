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
            'patient_lname' => 'Patient Lname',
            'patient_fname' => 'Patient Fname',
            'patient_mname' => 'Patient Mname',
            'patient_address' => 'Patient Address',
            'patient_ref_by' => 'Patient Ref By',
            'patient_family_history' => 'Patient Family History',
            'patient_menarche' => 'Patient Menarche',
            'patient_allergy' => 'Patient Allergy',
            'patient_dx' => 'Patient Dx',
            'patient_nodes' => 'Patient Nodes',
            'patient_hgr' => 'Patient Hgr',
            'patient_ngr' => 'Patient Ngr',
            'patient_stage' => 'Patient Stage',
            'patient_er' => 'Patient Er',
            'patient_pr' => 'Patient Pr',
            'patient_her_two_m' => 'Patient Her Two M',
            'patient_k_67' => 'Patient K 67',
            'patient_metastic' => 'Patient Metastic',
            'patient_date' => 'Patient Date',
            'patient_age' => 'Patient Age',
            'patient_dob' => 'Patient Dob',
            'patient_tel' => 'Patient Tel',
            'patient_cell_no' => 'Patient Cell No',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMedicalRecords()
    {
        return $this->hasMany(MedicalRecord::className(), ['patient_id' => 'id']);
    }
}
