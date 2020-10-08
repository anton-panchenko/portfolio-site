<?php

namespace frontend\controllers;

use common\models\Article;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;

class BlogController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = 'portfolio';

        $query = Article::find()->where(['status' => 1]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 3]);
        $articles = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('index', [
            'articles' => $articles,
            'pages' => $pages,
        ]);

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
