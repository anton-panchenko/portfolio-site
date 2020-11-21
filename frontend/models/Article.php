<?php


namespace frontend\models;


class Article extends \common\models\Article
{

    public function getTitle()
    {
        return $this->title;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    public function getAuthorName()
    {
        return $this->author->username;
    }

    public function getCategoryId()
    {
        return $this->category->id;
    }

    public function getCategoryTitle()
    {
        return $this->category->title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUrl()
    {
        return $this->url;
    }

}