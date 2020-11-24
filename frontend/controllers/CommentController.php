<?php


namespace frontend\controllers;


use Yii;
use frontend\models\CommentForm;

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