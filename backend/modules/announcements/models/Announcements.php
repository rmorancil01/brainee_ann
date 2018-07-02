<?php

namespace backend\modules\announcements\models;

use Yii;

/**
 * This is the model class for table "announcement".
 *
 * @property int $id
 * @property int $senderId
 * @property int $receiverId
 * @property int $topicId
 * @property string $ann_subject
 * @property string $ann_body
 * @property string $toEmail
 * @property string $dur_start
 * @property string $dur_end
 * @property int $status
 *
 * @property Topic $topic
 */
class Announcements extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'announcement';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['receiverId','ann_subject', 'ann_body', 'dur_start', 'dur_end'], 'required'],
            [['receiverId',], 'integer'],
            [['dur_start', 'dur_end'], 'safe'],
            [['ann_subject'], 'string', 'max' => 100],
            [['ann_body'], 'string', 'max' => 255],
            [['toEmail'], 'string', 'max' => 50],
            //[['topicId'], 'exist', 'skipOnError' => true, 'targetClass' => Topic::className(), 'targetAttribute' => ['topicId' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'senderId' => 'From',
            'receiverId' => 'To:',
            //'topicId' => 'Topic',
            'ann_subject' => 'Subject',
            'ann_body' => 'Content',
            'toEmail' => 'send to email?',
            'dur_start' => 'Duration Start',
            'dur_end' => 'Duration End',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    /*public function getTopic()
    {
        return $this->hasOne(Topic::className(), ['id' => 'topicId']);
    }*/
}
