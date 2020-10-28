<?php


namespace frontend\controllers;


use frontend\models\CommentForm;
use Yii;

class CommentController extends \yii\web\Controller
{
    public function actionAdd($id)
    {
        $form_model = new CommentForm();

        if($form_model->load(Yii::$app->request->post() )){

            if ($form_model->saveComment($id) && $form_model->validate()){
                return $this->redirect(Yii::$app->request->referrer);
            }

        }
    }
}