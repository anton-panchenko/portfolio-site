<?php

namespace frontend\controllers;

use Codeception\PHPUnit\ResultPrinter\HTML;
use frontend\models\CommentForm;
use frontend\models\repositories\ArticleRepository;
use frontend\models\repositories\CategoryRepository;
use frontend\models\repositories\TagRepository;
use Yii;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;

class BlogController extends \yii\web\Controller
{
    public $layout = 'portfolio';

    public function actionIndex()
    {
        $query = ArticleRepository::getAllActive();
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 3]);
        $articles = $query->offset($pages->offset)->limit($pages->limit)->all();
        $categories = CategoryRepository::getAll();
        $popularArticles = ArticleRepository::getPopular();
        $tags = TagRepository::getAll();

        return $this->render('index', compact('articles','categories', 'pages', 'popularArticles', 'tags'));
    }
}
