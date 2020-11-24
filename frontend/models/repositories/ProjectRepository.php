<?php


namespace frontend\models\repositories;

use Yii;
use frontend\models\Project;

class ProjectRepository extends Project
{

    public static function getAllActive()
    {
        return self::find()->andWhere(['status' => 1])->orderBy('sort')->all();
    }

    public static function getForMainPage()
    {
        return self::find()->andWhere(['status' => 1])->orderBy('sort')->limit(4)->all();
    }

    public static function getImageByPath($imagePath)
    {
        return Yii::$app->imagemanager->getImagePath($imagePath, 500, 250);
    }

}