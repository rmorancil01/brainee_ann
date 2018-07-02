<?php

namespace backend\modules\socialmedia\models;

use Yii;

/**
 * This is the model class for table "brainee_social_media".
 *
 * @property int $id
 * @property string $school_website
 * @property string $school_facebook
 * @property string $school_twitter
 * @property string $school_ig
 * @property string $created_date
 * @property string $date_modified
 * @property int $status
 */
class Socialmedia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'brainee_social_media';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_website', 'school_facebook', 'school_twitter', 'school_ig', 'status'], 'required'],
            [['created_date', 'date_modified'], 'safe'],
            [['school_website', 'school_facebook', 'school_twitter', 'school_ig'], 'string', 'max' => 50],
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
            'school_website' => 'School Website',
            'school_facebook' => 'School Facebook',
            'school_twitter' => 'School Twitter',
            'school_ig' => 'School Ig',
            'created_date' => 'Created Date',
            'date_modified' => 'Date Modified',
            'status' => 'Status',
        ];
    }
}
