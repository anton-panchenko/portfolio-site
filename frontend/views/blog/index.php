<?php

/* @var $this yii\web\View */

use yii\widgets\LinkPager;

/* @var $articles \frontend\controllers\BlogController */
/* @var $pages \frontend\controllers\BlogController */
/* @var $categories \frontend\controllers\BlogController */
/* @var $popularArticles \frontend\controllers\BlogController */
/* @var $tags \frontend\controllers\BlogController */

$this->title = 'Блог';

?>

<section class="blogPage">
    <div class="section_title">
        <div class="section_title__img">
            <img src="/img/svg/blog.svg" alt="section_img">
        </div>
        <h2 class="section_title__text">
            Блог
        </h2>
    </div><!-- end section_title -->
    <div class="blogPage_wrap">
        <div class="blogPage_gallery">

            <?php foreach ($articles as $article): ?>
            <div class="blogPage_gallery__item">
                <div class="blogPage_gallery__item_header">
                    <div class="blogPage_gallery__item_header__tags">
                        <?php foreach ($article->tags as $tag): ?>
                        <a href="404.html">#<?= $tag->title ?></a>
                        <?php endforeach; ?>
                    </div>
                    <a href="blog/<?= $article->url ?>" class="blogPage_gallery__item_header__title">
                        <?= $article->title ?>
                    </a>
                </div><!-- end blog_gallery__item_header -->
                <a href="post.html" class="blogPage_gallery__item_img">
                    <img src="<?php echo \Yii::$app->imagemanager->getImagePath($article->image); ?>"  alt="post_image">
                </a><!-- end blog_gallery__item_img -->
                <div class="blogPage_gallery__item_footer">
                    <a href="404.html" class="blogPage_gallery__item_footer__date">
                        <?= Yii::$app->formatter->asDate($article->updated_at, 'php:d / m / Y') ?>
                    </a>
                    <a href="404.html" class="blogPage_gallery__item_footer__author"><?= $article->category->title ?></a>
                </div><!-- end blog_gallery__item_footer -->
                <div class="blogPage_gallery__item_secondfooter">
                    <a href="404.html" class="blogPage_gallery__item_secondfooter__comments">0 комментариев</a>
                    <a href="404.html" class="blogPage_gallery__item_secondfooter__readBtn">Читать статью</a>
                </div><!-- end blog_gallery__item_secondfooter -->
            </div><!-- end blog_gallery__item -->
            <?php endforeach; ?>

            <div class="blogPage_gallery__pagination">
                <?=
                LinkPager::widget([
                    'pagination' => $pages,
                ]);
                ?>
            </div><!-- end blogPage_gallery__pagination -->
        </div><!-- end blogPage_gallery -->
        <div class="blogPage_sidebar">
            <div class="blogPage_sidebar__categories">
                <h3 class="blogPage_sidebar__categories_title">
                    Категории
                </h3><!-- end blogPage_sidebar__categories_title -->
                <div class="blogPage_sidebar__categories_items">
                    <?php foreach ($categories as $category): ?>
                    <div class="blogPage_sidebar__categories_items__item">
                        <a href="404.html" class="blogPage_sidebar__categories_items__item_text"><?= $category->title ?></a>
<!--                        <p class="blogPage_sidebar__categories_items__item_counter">(2)</p>-->
                    </div><!-- end blogPage_sidebar__categories_items__item -->
                    <?php endforeach; ?>
                </div><!-- end blogPage_sidebar__categories_items -->
            </div><!-- end blogPage_sidebar__categories -->
            <div class="blogPage_sidebar__popPosts">
                <h3 class="blogPage_sidebar__popPosts_title">
                    Популярные статьи
                </h3><!-- end blogPage_sidebar__popPosts_title -->
                <div class="blogPage_sidebar__popPosts_items">
                    <?php foreach ($popularArticles as $popularArticle): ?>
                    <div class="blogPage_sidebar__popPosts_items__item">
                        <a href="404.html" class="blogPage_sidebar__popPosts_items__item_date">
                            <?= Yii::$app->formatter->asDate($popularArticle->updated_at, 'php:d / m / Y') ?>
                        </a>
                        <a href="post.html" class="blogPage_sidebar__popPosts_items__item_title">
                            <?= $popularArticle->title ?>
                        </a>
                        <a href="404.html" class="blogPage_sidebar__popPosts_items__item_comments">
                            0 комментариев
                        </a>
                    </div><!-- end blogPage_sidebar__popPosts_items__item -->
                    <?php endforeach; ?>
                </div><!-- end blogPage_sidebar__popPosts_items -->
            </div><!-- end blogPage_sidebar__popPosts -->
            <div class="blogPage_sidebar__tags">
                <div class="blogPage_sidebar__tags_title">
                    Теги
                </div>
                <div class="blogPage_sidebar__tags_items">
                    <?php foreach ($tags as $tag): ?>
                    <a href="404.html" class="blogPage_sidebar__tags_items__item">#<?= $tag->title ?></a>
                    <?php endforeach; ?>
                </div>
            </div><!-- end blogPage_sidebar__tags -->
        </div><!-- end blogPage_sidebar -->
    </div><!-- end blogPage_wrap -->
</section><!-- end blog -->