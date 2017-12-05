<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ziduan".
 *
 * @property integer $id
 * @property string $ziduan
 * @property string $type
 * @property string $moren
 * @property string $isset
 * @property string $guize
 * @property string $xianzhi
 * @property string $xianzhi1
 * @property string $xianzhi2
 */
class Ziduan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ziduan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ziduan', 'type', 'moren', 'guize', 'xianzhi', 'xianzhi1', 'xianzhi2'], 'string', 'max' => 40],
            [['isset'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ziduan' => 'Ziduan',
            'type' => 'Type',
            'moren' => 'Moren',
            'isset' => 'Isset',
            'guize' => 'Guize',
            'xianzhi' => 'Xianzhi',
            'xianzhi1' => 'Xianzhi1',
            'xianzhi2' => 'Xianzhi2',
        ];
    }
}
