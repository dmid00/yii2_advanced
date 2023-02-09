<?php

namespace frontend\controllers;

use common\models\About;
use common\models\FeedbackForm;
use common\models\Ourfruit;
use common\models\Testimonial;
use common\models\Setting;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class ShopController extends Controller
{
    public function actionIndex() {
        $model = new FeedbackForm();
        if ($model->load(Yii::$app->request->post()) && $model->feedback(Yii::$app->params['adminEmail'])) {
             $this->refresh();
        }
        $settings = Setting::find()->one();
        $abouts = About::find()->all();
        $fruits = Ourfruit::find()->all();
        $testimonialtittle = Testimonial::find()->where(['status' => 1])->all();
        $testimonials = Testimonial::find()->where(['status' => 0])->all();
        return $this ->render('index', compact('settings','abouts','fruits', 'testimonialtittle', 'testimonials', 'model'));
    }

    /**
     * Displays a single Ourfruit model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Finds the Ourfruit model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Ourfruit the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Ourfruit::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionError()
    {
        $exception = Yii::$app->errorHandler->exception;
        return $this->render('error', ['exception' => $exception]);
    }
}