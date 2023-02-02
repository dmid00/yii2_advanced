<?php

namespace common\models;

/**
 * This is the model class for table "testimonial".
 *
 * @property int $id
 * @property string $img
 * @property string $name
 * @property string $title
 * @property string|null $description
 * @property string|null $status
 */
class Testimonial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testimonial';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['img', 'name', 'title'], 'required'],
            [['description'], 'string'],
            [['img', 'name', 'title', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Путь к файлу изображения',
            'name' => 'Покупатель',
            'title' => 'Заголовок',
            'description' => 'Описание',
            'status' => 'Первый в карусели (1/0)',
        ];
    }
}
