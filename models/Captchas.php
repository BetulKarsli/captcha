<?php

namespace kouosl\captcha\models;

use Yii;

/**
 * This is the model class for table "captchas".
 *
 * @property integer $ee
 * @property integer $dsa
 * @property integer $dsad
 * @property integer $dsadas
 */
class Captchas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'captchas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ee', 'dsa', 'dsad', 'dsadas'], 'required'],
            [['ee', 'dsa', 'dsad', 'dsadas'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ee' => 'Ee',
            'dsa' => 'Dsa',
            'dsad' => 'Dsad',
            'dsadas' => 'Dsadas',
        ];
    }
}
