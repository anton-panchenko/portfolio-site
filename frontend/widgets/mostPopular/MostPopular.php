<?php

namespace frontend\widgets\mostPopular;

use yii\base\Widget;
use frontend\models\repositories\ArticleRepository;

class MostPopular extends Widget
{
    public function init(){}

    public function run() {

        $popularArticles = ArticleRepository::getPopular();

        return $this->render('most-popular', compact('popularArticles'));

    }
}