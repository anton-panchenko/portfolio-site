<?php

namespace frontend\controllers;

use Codeception\PHPUnit\ResultPrinter\HTML;
use common\models\Article;
use common\models\Category;
use frontend\models\CommentForm;
use common\models\Tag;
use Yii;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;

class BlogController extends \yii\web\Controller
{
    public $layout = 'portfolio';

    public function actionIndex()
    {
        $query = Article::find()->where(['status' => 1])->orderBy('id DESC');
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 3]);
        $articles = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        $categories = Category::find()->all();
        $popularArticles = Article::find()->where(['status' => 1])->orderBy('viewed DESC')->limit(3)->all();
        $tags = Tag::find()->all();

        return $this->render('index', compact('articles','categories', 'pages', 'popularArticles', 'tags'));
    }

    public function actionArticle($url)
    {
        if ($article = Article::find()->andWhere(['url' => $url])->one()) {

            $tags = $article->tags;
            $comments = $article->comments;
            $form_model = new CommentForm();

            return $this->render('article', compact('article', 'tags', 'comments', 'form_model'));
        }
        throw new NotFoundHttpException('Такой статьи нет.');
    }

    public function actionComment($id)
    {
        $form_model = new CommentForm();

        if($form_model->load(Yii::$app->request->post() )){

            if ($form_model->saveComment($id) && $form_model->validate()){
                return $this->redirect(Yii::$app->request->referrer);
            }

        }
    }

}
