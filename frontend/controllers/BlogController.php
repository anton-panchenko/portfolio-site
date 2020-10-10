<?php

namespace frontend\controllers;

use common\models\Article;
use common\models\Category;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;

class BlogController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = 'portfolio';

        $query = Article::find()->where(['status' => 1])->orderBy('id DESC');
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 3]);
        $articles = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        $categories = Category::find()->all();
        $popularArticles = Article::find()->where(['status' => 1])->orderBy('viewed DESC')->limit(3)->all();

        return $this->render('index', compact('articles','categories', 'pages', 'popularArticles'));

//        $articles = Article::find()->andWhere(['status' => 1])->orderBy('id DESC')->all();
//        return $this->render('index', ['articles' => $articles]);
    }

    public function actionArticle($url)
    {
        $this->layout = 'portfolio';

        if ($article = Article::find()->andWhere(['url' => $url])->one()) {
            return $this->render('article', ['article' => $article]);
        }
        throw new NotFoundHttpException('Такой статьи нет.');
    }

}
