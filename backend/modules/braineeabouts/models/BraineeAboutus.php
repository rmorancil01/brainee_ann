<?php

namespace backend\modules\braineeabouts\models;

use Yii;

/**
 * This is the model class for table "brainee_about_us".
 *
 * @property int $id
 * @property string $mission
 * @property string $vision
 * @property string $school_address
 * @property string $school_contact
 * @property string $school_email
 * @property string $school_website
 * @property string $school_fb
 * @property string $school_ig
 * @property string $school_twitter
 * @property string $geo_x
 * @property string $geo_y
 * @property int $school_id
 * @property string $created_date
 * @property string $date_modified
 * @property int $status
 */
class BraineeAboutUs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'brainee_about_us';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mission', 'vision', 'school_address', 'school_contact', 'school_email', 'school_website', 'school_fb', 'school_ig', 'school_twitter', 'geo_x', 'geo_y', 'status'], 'required'],
            [['school_id', 'status'], 'integer'],
            [['created_date', 'date_modified'], 'safe'],
            [['mission', 'vision'], 'string', 'max' => 255],
            [['school_address', 'school_contact', 'school_email', 'school_website', 'school_fb', 'school_ig', 'school_twitter', 'geo_x', 'geo_y'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mission' => 'Mission',
            'vision' => 'Vision',
            'school_address' => 'School Address',
            'school_contact' => 'School Contact',
            'school_email' => 'School Email',
            'school_website' => 'School Website',
            'school_fb' => 'School Fb',
            'school_ig' => 'School Ig',
            'school_twitter' => 'School Twitter',
            'geo_x' => 'Geo X',
            'geo_y' => 'Geo Y',
            'school_id' => 'School Name',
            'created_date' => 'Created Date',
            'date_modified' => 'Date Modified',
            'status' => 'Status',
        ];
    }
}
