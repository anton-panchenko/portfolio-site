<?php


namespace common\helpers;


use Yii;

class Date
{
    public static function getDate($date)
    {
        return Yii::$app->formatter->asDate($date, 'php:d / m / Y');
    }
}