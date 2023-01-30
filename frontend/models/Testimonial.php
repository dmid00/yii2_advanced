<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class Testimonial extends ActiveRecord
{
    public static function tableName() {
        return 'testimonial';
    }

    function behaviors()
    {
        return [
            'seo' => [
                'class' => 'dvizh\seo\behaviors\SeoFields',
            ],
        ];
    }
}