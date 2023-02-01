<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "upsetting".
 *
 * @property int $id
 * @property string $namesite
 * @property string $email
 * @property string $location
 * @property string $phone
 * @property string $sendEmail
 * @property string $sendPassEmail
 * @property string $locationUrl
 * @property string $selection1
 * @property string $selection2
 * @property string $selection3
 * @property string $selection4
 * @property string $selection5
 */
class Upsetting extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'upsetting';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['namesite', 'email', 'location', 'phone', 'sendEmail', 'sendPassEmail', 'locationUrl', 'selection1', 'selection2', 'selection3', 'selection4', 'selection5'], 'required'],
            [['namesite', 'email', 'location', 'phone', 'sendEmail', 'sendPassEmail', 'locationUrl', 'selection1', 'selection2', 'selection3', 'selection4', 'selection5'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'namesite' => 'Название сайта',
            'email' => 'Email технической поддержки',
            'location' => 'Страна/Город/Улица/Дом',
            'phone' => 'Номер телефона',
            'sendEmail' => 'Обратная связь',
            'sendPassEmail' => '*Пароль обратной связи*',
            'locationUrl' => 'URL расположения',
            'selection1' => 'Название элемента №1',
            'selection2' => 'Название элемента №2',
            'selection3' => 'Название элемента №3',
            'selection4' => 'Название элемента №4',
            'selection5' => 'Название элемента №5',
        ];
    }
}
