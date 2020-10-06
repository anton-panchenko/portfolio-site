<?php

namespace frontend\controllers;

use common\models\Article;
use yii\web\NotFoundHttpException;

class BlogController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $articles = Article::find()->andWhere(['status' => 1])->orderBy('id DESC')->all();
        return $this->render('index', ['articles' => $articles]);
    }

    public function actionArticle($url)
    {
        if ($article = Article::find()->andWhere(['url' => $url])->one()) {
            return $this->render('article', ['article' => $article]);
        }
        throw new NotFoundHttpException('Такой статьи нет.');
    }

}
