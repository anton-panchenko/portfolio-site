<?php


namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\CommentForm;
use yii\web\NotFoundHttpException;
use frontend\models\repositories\ArticleRepository;


class ArticleController extends Controller
{
    public $layout = 'portfolio';

    public function actionIndex($url)
    {
        if ($article = ArticleRepository::getArticleModelByUrl($url)) {

            $tags = $article->getTagsModel();
            $comments = $article->getCommentsModel();
            $form_model = new CommentForm();

            return $this->render('index', compact('article', 'tags', 'comments', 'form_model'));
        }
        throw new NotFoundHttpException(Yii::t('model', 'article_not_found'));
    }
}