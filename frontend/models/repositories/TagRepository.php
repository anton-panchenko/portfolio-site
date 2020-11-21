<?php


namespace frontend\models\repositories;


use common\models\Article;
use frontend\models\Tag;

class TagRepository extends Tag
{
    public static function getAll()
    {
        return self::find()->all();
    }

    public static function getById($id)
    {
        return self::findOne(['id' => $id]);
    }

    public static function getArticlesByTagId($id)
    {
        $tag = self::getById($id);
//        return $tag->hasMany(Article::className(), ['id' => 'article_id'])
//            ->viaTable('article_tag', ['tag_id' => 'id']);
        return $tag->getArticles();
//        return $tag->articles;

    }
}