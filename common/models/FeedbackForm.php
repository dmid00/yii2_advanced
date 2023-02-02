<?php

namespace common\models;

use Yii;
use yii\base\Model;

class FeedbackForm extends Model
{
    public $name;
    public $email;
    public $number;
    public $message;
    public function rules()
    {
        return [
            [['name', 'email', 'number', 'message'], 'required'],
            ['email', 'email'],
        ];
    }

    public function feedback($email): bool
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$this->email => $this->name])
            ->setSubject($this->number)
            ->setTextBody($this->message)
            ->send();
    }
}