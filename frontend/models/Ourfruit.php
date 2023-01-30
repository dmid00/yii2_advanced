<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class Ourfruit extends ActiveRecord
{
    public static function tableName() {
        return 'ourfruit';
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