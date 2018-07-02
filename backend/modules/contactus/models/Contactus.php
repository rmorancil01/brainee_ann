<?php

namespace backend\modules\contactus\models;

use Yii;

/**
 * This is the model class for table "brainee_contact_us".
 *
 * @property int $id
 * @property string $school_id
 * @property string $school_address
 * @property string $school_contact
 * @property string $school_email
 * @property int $social_id
 * @property string $created_date
 * @property string $date_modified
 * @property int $geolocation_id
 * @property int $status
 */
class Contactus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'brainee_contact_us';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_id', 'school_address', 'school_contact', 'school_email', 'social_id', 'geolocation_id', 'status'], 'required'],
            [['social_id', 'geolocation_id'], 'integer'],
            [['created_date', 'date_modified'], 'safe'],
            [['school_id', 'school_address', 'school_contact', 'school_email'], 'string', 'max' => 100],
            [['status'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'school_id' => 'School ID',
            'school_address' => 'School Address',
            'school_contact' => 'School Contact',
            'school_email' => 'School Email',
            'social_id' => 'Social ID',
            'created_date' => 'Created Date',
            'date_modified' => 'Date Modified',
            'geolocation_id' => 'Geolocation ID',
            'status' => 'Status',
        ];
    }

    public function getGeolocation()
    {
        return $this->hasOne(Geolocation::className(), ['id' => 'geolocation_id']);
    }
    public function getSchool()
    {
        return $this->hasOne(School::className(), ['id' => 'school_id']);
    }
}
