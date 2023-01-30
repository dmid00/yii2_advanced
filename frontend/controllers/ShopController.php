<?php

namespace frontend\controllers;

use frontend\models\About;
use frontend\models\FeedbackForm;
use frontend\models\Navbar;
use frontend\models\Ourfruit;
use frontend\models\Setting;
use frontend\models\Testimonial;
use Yii;
use yii\web\Controller;
class ShopController extends Controller
{
    public function actionIndex() {
        $model = new FeedbackForm();
        if ($model->load(Yii::$app->request->post()) && $model->feedback(Yii::$app->params['adminEmail'])) {
             $this->refresh();
        }
        $navbars = Navbar::find()->all();
        $settings = Setting::find()->one();
        $abouts = About::find()->all();
        $fruits = Ourfruit::find()->all();
        $testimonialtittle = Testimonial::find()->where(['status' => 1])->all();
        $testimonials = Testimonial::find()->where(['status' => 0])->all();
        return $this ->render('index', compact('navbars','settings','abouts','fruits', 'testimonialtittle', 'testimonials', 'model'));
    }
}