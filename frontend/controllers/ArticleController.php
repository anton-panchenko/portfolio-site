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
        ArticleRepository::viewsIncrease($url);

        if ($article = ArticleRepository::getArticleModelByUrl($url)) {

            $tags = $article->getTagsModel();
            $comments = $article->getCommentsModel();
            $form_model = new CommentForm();

            $changePossibility = ArticleRepository::getChangePossibility($url);

            return $this->render('index', compact(
                'article', 'tags', 'comments', 'form_model', 'changePossibility'
            ));
        }
        throw new NotFoundHttpException(Yii::t('model', 'article_not_found'));
    }

    public function actionNext($id)
    {
        $nextArticleModel = ArticleRepository::getArticleModelById($id + 1);

        return $this->actionIndex($nextArticleModel->url);
    }

    public function actionPrevious($id)
    {
        $previousArticleModel = ArticleRepository::getArticleModelById($id - 1);

        return $this->actionIndex($previousArticleModel->url);
    }
}