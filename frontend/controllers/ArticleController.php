<?php


namespace frontend\controllers;


use frontend\models\CommentForm;
use frontend\models\repositories\ArticleRepository;
use yii\web\NotFoundHttpException;

class ArticleController extends \yii\web\Controller
{
    public $layout = 'portfolio';

    public function actionIndex($url)
    {
        if ($article = ArticleRepository::getByUrl($url)) {

            $tags = $article->tags;
            $comments = $article->comments;
            $form_model = new CommentForm();

            return $this->render('index', compact('article', 'tags', 'comments', 'form_model'));
        }
        throw new NotFoundHttpException('Такой статьи нет.');
    }
}