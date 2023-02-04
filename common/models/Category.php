<?php

namespace common\models;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $url
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название раздела',
            'url' => 'URL страницы',
        ];
    }
}
