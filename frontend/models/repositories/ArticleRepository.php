<?php

namespace frontend\models\repositories;

use common\helpers\StatusHelper;

class ArticleRepository extends \common\models\Article
{
    public static function getAllActive()
    {
        return self::find()->where(['status' => StatusHelper::ACTIVE])->orderBy('id DESC');
    }

    public static function getPopular()
    {
        return self::find()->where(['status' => StatusHelper::ACTIVE])->orderBy('viewed DESC')->limit(3)->all();
    }

    public static function getByUrl($url)
    {
        return self::find()->andWhere(['url' => $url])->one();
    }
}