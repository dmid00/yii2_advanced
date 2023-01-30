<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ourfruit".
 *
 * @property int $id
 * @property string $img
 * @property string $name
 */
class Ourfruit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ourfruit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['img', 'name'], 'required'],
            [['img', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
            'name' => 'Name',
        ];
    }
}
