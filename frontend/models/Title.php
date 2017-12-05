<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "title".
 *
 * @property integer $id
 * @property string $title
 * @property string $nei
 * @property string $username
 */
class Title extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'title';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'nei', 'username'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'nei' => 'Nei',
            'username' => 'Username',
        ];
    }
}
