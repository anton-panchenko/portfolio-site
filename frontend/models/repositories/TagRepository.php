<?php


namespace frontend\models\repositories;


use common\models\Tag;

class TagRepository extends Tag
{
    public static function getAll()
    {
        return self::find()->all();
    }

    public static function getAllTagsModels()
    {
        return self::getAll();
    }
}