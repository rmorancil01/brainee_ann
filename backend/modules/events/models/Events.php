<?php

namespace backend\modules\events\models;

use Yii;

/**
 * This is the model class for table "brainee_events".
 *
 * @property int $id
 * @property int $sy_id
 * @property string $event_date
 * @property string $event_body
 * @property string $event_files
 * @property string $created_date
 * @property string $date_modified
 * @property int $status
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'brainee_events';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sy_id', 'event_date', 'event_body', 'event_files', 'status'], 'required'],
            [['sy_id'], 'integer'],
            [['event_date', 'created_date', 'date_modified'], 'safe'],
            [['event_body', 'event_files'], 'string', 'max' => 255],
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
            'sy_id' => 'Sy ID',
            'event_date' => 'Event Date',
            'event_body' => 'Event Body',
            'event_files' => 'Upload files',
            'created_date' => 'Created Date',
            'date_modified' => 'Date Modified',
            'status' => 'Status',
        ];
    }
}
