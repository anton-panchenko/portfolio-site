<?php

namespace frontend\models\repositories;

use common\models\Tag;
use frontend\models\Article;
use Yii;

class ArticleRepository extends Article
{
    public static function getAllActive()
    {
        return self::find()->active()->orderBy('id DESC');
    }

    public static function getPopular()
    {
        return self::find()->active()->orderBy('viewed DESC')->limit(3)->all();
    }

    public static function getByUrl($url)
    {
        return self::findOne(['url' => $url]);
    }

    public static function getById($id)
    {
        return self::findOne(['id' => $id]);
    }

    public function getTagsModel()
    {
        return $this->tags;
    }

    public function getCommentsModel()
    {
        return $this->comments;
    }

    public static function getByCategory($category_id)
    {
        return self::find()->active()->andWhere(['category_id' => $category_id])->orderBy('id DESC');
    }

    public static function getImageByPath($imagePath)
    {
        return Yii::$app->imagemanager->getImagePath($imagePath);
    }

    public static function viewsIncrease($url)
    {
        $article = self::getByUrl($url);
        $article->updateCounters(['viewed' => 1]);

        return true;
    }

    public static function getArticleIdByUrl($url)
    {
        $articleModel = self::findOne(['url' => $url]);

        return $articleModel->id;
    }

    public static function getChangePossibility($url)
    {
        $articleId = self::getArticleIdByUrl($url);

        $changePossibility = [
            'canNext' => true,
            'canPrevious' => true,
        ];

        if (self::getById($articleId - 1) === null){

            $changePossibility = [
                'canNext' => true,
                'canPrevious' => false
            ];
        } elseif (self::getById($articleId + 1) === null){

            $changePossibility = [
                'canNext' => false,
                'canPrevious' => true
            ];
        }

        return $changePossibility;
    }

    public static function getArticlesForMainPage()
    {
        return self::findAll([5, 4]);
    }
}