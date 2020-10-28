<?php


namespace frontend\models\repositories;


use common\models\Category;

class CategoryRepository extends Category
{
    public static function getAll()
    {
        return self::find()->all();
    }
}