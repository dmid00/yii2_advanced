<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class Setting extends ActiveRecord
{
    public static function tableName() {
        return 'upsetting';
    }
}