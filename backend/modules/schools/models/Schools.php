<?php

namespace backend\modules\schools\models;

use Yii;

/**
 * This is the model class for table "brainee_schools".
 *
 * @property int $id
 * @property string $school_name
 */
class Schools extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'brainee_schools';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_name'], 'required'],
            [['school_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'school_name' => 'School Name',
        ];
    }
}
