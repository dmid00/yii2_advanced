<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class Navbar extends ActiveRecord
{
    public static function tableName() {
        return 'navbar';
    }

}