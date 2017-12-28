<?php

namespace kouosl\captcha\models;

use Yii;

/**
 * This is the model class for table "veriler".
 *
 * @property integer $istenen_captcha
 * @property string $captcha_tipi
 * @property integer $karakter_sayisi
 * @property integer $time
 * @property integer $basari_durumu
 */
class Verilers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'veriler';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['istenen_captcha', 'captcha_tipi', 'karakter_sayisi', 'time', 'basari_durumu'], 'required'],
            [['istenen_captcha', 'karakter_sayisi', 'time', 'basari_durumu'], 'integer'],
            [['captcha_tipi'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'istenen_captcha' => 'Istenen Captcha',
            'captcha_tipi' => 'Captcha Tipi',
            'karakter_sayisi' => 'Karakter Sayisi',
            'time' => 'Time',
            'basari_durumu' => 'Basari Durumu',
        ];
    }
}
