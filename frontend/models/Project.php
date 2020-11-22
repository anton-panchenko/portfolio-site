<?php


namespace frontend\models;


class Project extends \common\models\Project
{

    public function getTitle()
    {
        return $this->title;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getFilterClass()
    {
        return $this->filter_class;
    }

}