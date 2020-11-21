<?php


namespace frontend\models\repositories;


use frontend\models\Category;
use frontend\models\repositories\ArticleRepository;

class CategoryRepository extends Category
{
    public static function getAll()
    {
        return self::find()->all();
    }

    public static function getArticlesCount($id = 0)
    {
        if ($id === 0){

            return ArticleRepository::getAllActive()->count();
        } else {

            return ArticleRepository::getByCategory($id)->count();
        }
    }
}