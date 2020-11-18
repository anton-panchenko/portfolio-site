<?php

namespace frontend\models\repositories;

use frontend\models\Article;
use Yii;

class ArticleRepository extends Article
{
    public static function getAllActive()
    {
        return self::find()->active()->orderBy('id DESC');
    }

    public static function getAllActiveArticlesModels()
    {
        return self::getAllActive();
    }

    public static function getPopular()
    {
        return self::find()->active()->orderBy('viewed DESC')->limit(5)->all();
    }

    public static function getByUrl($url)
    {
        return self::find()->andWhere(['url' => $url])->one();
    }

    public static function getArticleModelByUrl($url)
    {
        return self::getByUrl($url);
    }

    public static function getById($id)
    {
        return self::find()->andWhere(['id' => $id])->one();
    }

    public static function getArticleModelById($id)
    {
        return self::getById($id);
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

    public static function getArticlesModelsByCategory($category_id)
    {
        return self::getByCategory($category_id);
    }

    public static function getImage($imagePath)
    {
        return Yii::$app->imagemanager->getImagePath($imagePath);
    }

    public static function viewsIncrease($url)
    {
        $article = self::getArticleModelByUrl($url);
        $article->updateCounters(['viewed' => 1]);

        return true;
    }

    public static function getArticleIdByUrl($url)
    {
        $articleModel = self::find()->andWhere(['url' => $url])->one();

        return $articleModel->id;
    }

    public static function getChangePossibility($url)
    {
        $articleId = self::getArticleIdByUrl($url);

        $changePossibility = [
            'canNext' => true,
            'canPrevious' => true,
        ];

        if (self::getArticleModelById($articleId - 1) === null){

            $changePossibility = [
                'canNext' => true,
                'canPrevious' => false
            ];
        } elseif (self::getArticleModelById($articleId + 1) === null){

            $changePossibility = [
                'canNext' => false,
                'canPrevious' => true
            ];
        }

        return $changePossibility;
    }
}