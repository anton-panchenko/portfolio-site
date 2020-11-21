<?php

namespace frontend\widgets\mostPopular;

use common\helpers\Date;
use Yii;
use frontend\models\repositories\ArticleRepository;
use yii\helpers\Url;

/* @var $popularArticles array */

?>

<div class="blogPage_sidebar__popPosts">
    <h3 class="blogPage_sidebar__popPosts_title">
        <?= Yii::t('blog', 'Popular articles') ?>
    </h3><!-- end blogPage_sidebar__popPosts_title -->
    <div class="blogPage_sidebar__popPosts_items">
        <?php foreach ($popularArticles as $popularArticle): ?>
            <div class="blogPage_sidebar__popPosts_items__item">
                <p class="blogPage_sidebar__popPosts_items__item_date">
                    <?= Date::getDate($popularArticle->getUpdatedAt()); ?>
                </p>
                <a href="<?= Url::to('/article/'.$popularArticle->getUrl()) ?>" class="blogPage_sidebar__popPosts_items__item_title">
                    <?= $popularArticle->getTitle() ?>
                </a>
                <a href="<?= Url::to('/article/'.$popularArticle->getUrl()) ?>" class="blogPage_sidebar__popPosts_items__item_comments">
                    <?php $commentCount = count($popularArticle->getCommentsModel()); ?>
                    <?= $commentCount.' '.Yii::t('blog', '{commentCount, plural, one{comment} other{comments}}', ['commentCount' => $commentCount]); ?>
                </a>
            </div><!-- end blogPage_sidebar__popPosts_items__item -->
        <?php endforeach; ?>
    </div><!-- end blogPage_sidebar__popPosts_items -->
</div><!-- end blogPage_sidebar__popPosts -->
