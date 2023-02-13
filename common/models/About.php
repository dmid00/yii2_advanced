<?php

namespace common\models;

use Yii;
use yii\helpers\Url;
use yii\web\UploadedFile;

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
    public $file_about;
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
            [['file_about'], 'image'],
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
            'file_about' => '',
            'tittle' => 'Заголовок',
            'description' => 'Описание',
        ];
    }

    public function getImagesPreview()
    {
        $dir = str_replace('admin','',Url::home(true)).'frontend/web/';
        return $dir.$this->img;

    }

    public function beforeSave($insert)
    {
        if ($file_about = UploadedFile::getInstance($this, 'file_about')){
            $dir = Yii::getAlias('@frontend/web/');
            if (file_exists($dir.$this->img) && $this->img!=null){
                unlink($dir.$this->img);
            }
            $this->img = 'imagesAbout/' . strtotime('now') . '.' .$file_about->extension;
            $file_about->saveAs($dir.$this->img);
        }
        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }
}
