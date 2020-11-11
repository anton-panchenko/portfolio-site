<?php

namespace frontend\widgets\mostPopular;

use Yii;

/* @var $popularArticles array */

?>

<div class="blogPage_sidebar__popPosts">
    <h3 class="blogPage_sidebar__popPosts_title">
        <?= Yii::t('blog', 'Popular articles') ?>
    </h3><!-- end blogPage_sidebar__popPosts_title -->
    <div class="blogPage_sidebar__popPosts_items">
        <?php foreach ($popularArticles as $popularArticle): ?>
            <div class="blogPage_sidebar__popPosts_items__item">
                <a href="404.html" class="blogPage_sidebar__popPosts_items__item_date">
                    <?= Yii::$app->formatter->asDate($popularArticle->updated_at, 'php:d / m / Y') ?>
                </a>
                <a href="article/<?= $popularArticle->url ?>" class="blogPage_sidebar__popPosts_items__item_title">
                    <?= $popularArticle->title ?>
                </a>
                <a href="404.html" class="blogPage_sidebar__popPosts_items__item_comments">
                    <?php $commentCount = count($popularArticle->comments); ?>
                    <?= $commentCount.' '.Yii::t('blog', '{commentCount, plural, one{comment} other{comments}}', ['commentCount' => $commentCount]); ?>
                </a>
            </div><!-- end blogPage_sidebar__popPosts_items__item -->
        <?php endforeach; ?>
    </div><!-- end blogPage_sidebar__popPosts_items -->
</div><!-- end blogPage_sidebar__popPosts -->
