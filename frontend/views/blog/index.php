<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
use frontend\widgets\mostPopular\MostPopular;

/* @var $this yii\web\View */
/* @var $articles array */
/* @var $pages array */
/* @var $categories array */
/* @var $tags array */

$this->title = Yii::t('main', 'Portfolio | Blog');

?>

<section class="blogPage">
    <div class="section_title">
        <div class="section_title__img">
            <img src="/img/svg/blog.svg" alt="section_img">
        </div>
        <h2 class="section_title__text">
            <?= Yii::t('blog', 'Blog') ?>
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
                    <a href="article/<?= $article->url ?>" class="blogPage_gallery__item_header__title">
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
                    <a href="404.html" class="blogPage_gallery__item_secondfooter__comments">
                        <?php $commentCount = count($article->comments); ?>
                        <?= $commentCount.' '.Yii::t('blog', '{commentCount, plural, one{comment} other{comments}}', ['commentCount' => $commentCount]); ?>
                    </a>
                    <a href="404.html" class="blogPage_gallery__item_secondfooter__readBtn">
                        <?= Yii::t('blog', 'Read article') ?>
                    </a>
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
                    <?= Yii::t('blog', 'Categories') ?>
                </h3><!-- end blogPage_sidebar__categories_title -->
                <div class="blogPage_sidebar__categories_items">
                    <?php foreach ($categories as $category): ?>
                    <div class="blogPage_sidebar__categories_items__item">
                        <?= Html::a($category->title, '/blog/'.$category->id, ['class' => 'blogPage_sidebar__categories_items__item_text']) ?>
                        <p class="blogPage_sidebar__categories_items__item_counter">
                            (0)
                        </p>
                    </div><!-- end blogPage_sidebar__categories_items__item -->
                    <?php endforeach; ?>
                    <div class="blogPage_sidebar__categories_items__item">
                        <?= Html::a(Yii::t('blog', 'All Articles'), '/blog/index', ['class' => 'blogPage_sidebar__categories_items__item_text']) ?>
                        <p class="blogPage_sidebar__categories_items__item_counter">
                            (<?= $category->totalCount ?>)
                        </p>
                    </div><!-- end blogPage_sidebar__categories_items__item -->

                </div><!-- end blogPage_sidebar__categories_items -->
            </div><!-- end blogPage_sidebar__categories -->

            <?= MostPopular::widget(); ?>

            <div class="blogPage_sidebar__tags">
                <div class="blogPage_sidebar__tags_title">
                    <?= Yii::t('blog', 'Tags') ?>
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