<?php

use yii\helpers\Url;
use yii\helpers\Html;
use common\helpers\Date;
use yii\widgets\LinkPager;
use frontend\widgets\mostPopular\MostPopular;
use frontend\models\repositories\ArticleRepository;
use frontend\models\repositories\CategoryRepository;

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
                        <?php foreach ($article->getTagsModel() as $tag): ?>
                        <a href="<?= Url::to('/blog/tag/'.$tag->getId()) ?>">#<?= $tag->getTitle() ?></a>
                        <?php endforeach; ?>
                    </div>
                    <a href="<?= Url::to('/article/'.$article->getUrl()); ?>" class="blogPage_gallery__item_header__title">
                        <?= $article->getTitle() ?>
                    </a>
                </div><!-- end blog_gallery__item_header -->
                <a href="<?= Url::to('/article/'.$article->getUrl()) ?>" class="blogPage_gallery__item_img">
                    <img src="<?= ArticleRepository::getImageByPath($article->getImage()); ?>"  alt="post_image">
                </a><!-- end blog_gallery__item_img -->
                <div class="blogPage_gallery__item_footer">
                    <p class="blogPage_gallery__item_footer__date">
                        <?= Date::getDate($article->getUpdatedAt()); ?>
                    </p>
                    <a href="<?= Url::to('/blog/'.$article->getCategoryId()) ?>" class="blogPage_gallery__item_footer__author">
                        <?= $article->getCategoryTitle() ?>
                    </a>
                </div><!-- end blog_gallery__item_footer -->
                <div class="blogPage_gallery__item_secondfooter">
                    <a href="<?= Url::to('/article/'.$article->getUrl()) ?>" class="blogPage_gallery__item_secondfooter__comments">
                        <?php $commentCount = count($article->getCommentsModel()); ?>
                        <?= $commentCount.' '.Yii::t('blog', '{commentCount, plural, one{comment} other{comments}}', ['commentCount' => $commentCount]); ?>
                    </a>
                    <a href="<?= Url::to('/article/'.$article->getUrl()) ?>" class="blogPage_gallery__item_secondfooter__readBtn">
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
                        <?= Html::a($category->getTitle(), '/blog/category/'.$category->getId(), ['class' => 'blogPage_sidebar__categories_items__item_text']) ?>
                        <p class="blogPage_sidebar__categories_items__item_counter">
                            (<?= CategoryRepository::getArticlesCount($category->getId()); ?>)
                        </p>
                    </div><!-- end blogPage_sidebar__categories_items__item -->
                    <?php endforeach; ?>
                    <div class="blogPage_sidebar__categories_items__item">
                        <?= Html::a(Yii::t('blog', 'All Articles'), '/blog/index', ['class' => 'blogPage_sidebar__categories_items__item_text']) ?>
                        <p class="blogPage_sidebar__categories_items__item_counter">
                            (<?= CategoryRepository::getArticlesCount(); ?>)
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
                    <a href="<?= Url::to('/blog/tag/'.$tag->getId()) ?>" class="blogPage_sidebar__tags_items__item">#<?= $tag->getTitle() ?></a>
                    <?php endforeach; ?>
                </div>
            </div><!-- end blogPage_sidebar__tags -->
        </div><!-- end blogPage_sidebar -->
    </div><!-- end blogPage_wrap -->
</section><!-- end blog -->