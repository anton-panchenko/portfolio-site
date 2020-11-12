<?php

namespace frontend\models\repositories;

use frontend\models\Article;

class ArticleRepository extends Article
{
    public static function getAllActive()
    {
        return self::find()->active()->orderBy('id DESC');
    }

    public static function getPopular()
    {
        return self::find()->active()->orderBy('viewed DESC')->limit(5)->all();
    }

    public static function getByUrl($url)
    {
        return self::find()->andWhere(['url' => $url])->one();
    }

    public function getTagsModel()
    {
        return $this->tags;
    }

    public function getCommentsModel()
    {
        return $this->comments;
    }

    public static function getArticleModelByUrl($url)
    {
        return self::getByUrl($url);
    }

    public static function getAllActiveArticlesModels()
    {
        return self::getAllActive();
    }
}