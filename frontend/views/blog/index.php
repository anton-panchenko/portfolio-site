<?php

/* @var $this yii\web\View */
/* @var $articles \frontend\controllers\BlogController */

$this->title = 'Блог';

?>

<div class="blog-index">

    <div class="jumbotron">
        <h1><?= $this->title ?></h1>
    </div>

    <div class="body-content">

        <div class="row">
            <?php foreach ($articles as $article): ?>
            <div class="col-lg-6">
                <h2><?= $article->title ?></h2>
                <p><?= $article->description ?></p>
                <p><a class="btn btn-success" href="blog/<?= $article->url ?>">Читать статью</a></p>
            </div>
            <?php endforeach; ?>
        </div>

    </div>

</div>