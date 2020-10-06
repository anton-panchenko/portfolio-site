<?php

/* @var $this yii\web\View */
/* @var $article \frontend\controllers\BlogController */

$this->title = $article->title;

?>

<div class="blog-article">

    <div class="jumbotron">
        <h1><?= $this->title ?></h1>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-12">
                <p><?= $article->content ?></p>
            </div>
        </div>

    </div>

</div>