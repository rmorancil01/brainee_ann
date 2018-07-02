<?php

namespace backend\modules\topics\models;

use Yii;

/**
 * This is the model class for table "topic".
 *
 * @property int $id
 * @property string $topicName
 * @property int $topicStatus
 *
 * @property Announcement[] $announcements
 */
class Topics extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'topic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['topicName', 'topicStatus'], 'required'],
            [['topicStatus'], 'string'],
            [['topicName'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'topic_id' => 'ID',
            'topicName' => 'Topic Name',
            'topicStatus' => 'Topic Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnnouncements()
    {
        return $this->hasMany(Announcement::className(), ['topicId' => 'topic_id']);
    }
}
