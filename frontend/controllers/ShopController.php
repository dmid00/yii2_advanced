<?php

namespace frontend\controllers;

use common\models\About;
use common\models\FeedbackForm;
use common\models\Category;
use common\models\Ourfruit;
use common\models\Testimonial;
use common\models\Upsetting;
use Yii;
use yii\web\Controller;
class ShopController extends Controller
{
    public function actionIndex() {
        $model = new FeedbackForm();
        if ($model->load(Yii::$app->request->post()) && $model->feedback(Yii::$app->params['adminEmail'])) {
             $this->refresh();
        }

        $settings = Upsetting::find()->one();
        $abouts = About::find()->all();
        $fruits = Ourfruit::find()->all();
        $testimonialtittle = Testimonial::find()->where(['status' => 1])->all();
        $testimonials = Testimonial::find()->where(['status' => 0])->all();
        return $this ->render('index', compact('settings','abouts','fruits', 'testimonialtittle', 'testimonials', 'model'));
    }
}