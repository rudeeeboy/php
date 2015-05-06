<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "msgs".
 *
 * @property integer $id
 * @property integer $from
 * @property integer $to
 * @property string $text
 */
class Msgs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'msgs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['from', 'to', 'text'], 'required'],
            [['from', 'to'], 'integer'],
            [['text'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'from' => 'From',
            'to' => 'To',
            'text' => 'Text',
        ];
    }
}
