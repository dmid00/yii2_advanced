<?php

namespace common\models;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $img
 * @property string $tittle
 * @property string|null $description
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tittle'], 'required'],
            [['description'], 'string'],
            [['img','tittle'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Изображение',
            'tittle' => 'Заголовок',
            'description' => 'Описание',
        ];
    }


}
