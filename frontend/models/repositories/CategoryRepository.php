<?php


namespace frontend\models\repositories;


use common\models\Category;
use frontend\models\repositories\ArticleRepository;

class CategoryRepository extends Category
{
    public static function getAll()
    {
        return self::find()->all();
    }

    public static function getAllCategoriesModels()
    {
        return self::getAll();
    }

    public static function getArticlesCount($id = 0)
    {
        if ($id === 0){

            return ArticleRepository::getAllActiveArticlesModels()->count();
        } else {

            return ArticleRepository::getArticlesModelsByCategory($id)->count();
        }
    }
}