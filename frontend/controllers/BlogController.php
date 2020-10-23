<?php

namespace frontend\controllers;

use common\models\Article;
use common\models\Category;
use common\models\Comment;
use common\models\CommentForm;
use common\models\Tag;
use Yii;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;

class BlogController extends \yii\web\Controller
{
    public $layout = 'portfolio';

    public function actionIndex()
    {
//        $this->layout = 'portfolio';

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
//        $this->layout = 'portfolio';

        if ($article = Article::find()->andWhere(['url' => $url])->one()) {

            $tags = $article->tags;
            $comments = $article->comments;
            $model = new Comment();

            return $this->render('article', compact('article', 'tags', 'comments', 'model'));
        }
        throw new NotFoundHttpException('Такой статьи нет.');
    }

    public function actionComment($id)
    {
        $model = new CommentForm();

        if ($model->load(Yii::$app->request->post())){

            if ($model->validate() && $model->saveComment($id)){
                return $this->goBack();
            }

        }

//        $model = new CommentForm();

//        if (\Yii::$app->request->post()){
//            $model->load(Yii::$app->request->post());
//
//            if ($model->saveComment($id)){
//
//                return $this->redirect(['blog/article', 'id' => $id]);
//            }
//        }
    }

}
