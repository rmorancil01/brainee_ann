<?php

namespace backend\modules\geolocation\models;

use Yii;

/**
 * This is the model class for table "brainee_geolocation".
 *
 * @property int $id
 * @property string $x_axis
 * @property string $y_axis
 * @property int $status
 */
class Geolocation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'brainee_geolocation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['x_axis','school_id', 'y_axis', 'status'], 'required'],
            [['x_axis', 'y_axis'], 'string', 'max' => 50],
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
            'school_id' => 'school id',
            'x_axis' => 'X Axis',
            'y_axis' => 'Y Axis',
            'status' => 'Status',
        ];
    }
}
