<?php

namespace frontend\controllers;

use Yii;
use yii\data\Pagination;
use yii\web\Controller;
use frontend\models\repositories\TagRepository;
use frontend\models\repositories\ArticleRepository;
use frontend\models\repositories\CategoryRepository;

class BlogController extends Controller
{
    public $layout = 'portfolio';

    public function actionIndex()
    {
        $query = ArticleRepository::getAllActive();
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 3]);
        $articles = $query->offset($pages->offset)->limit($pages->limit)->all();
        $categories = CategoryRepository::getAll();
        $tags = TagRepository::getAll();

        return $this->render('index', compact('articles','categories', 'pages', 'tags'));
    }
}
