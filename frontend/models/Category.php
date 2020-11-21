<?php


namespace frontend\models;


class Category extends \common\models\Category
{

    public function getTitle()
    {
        return $this->title;
    }

    public function getId()
    {
        return $this->id;
    }

}