<?php

/* @var $this yii\web\View */

use yii\widgets\LinkPager;

/* @var $articles \frontend\controllers\BlogController */
/* @var $pages \frontend\controllers\BlogController */

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
                        <a href="404.html">#Yii2</a>
                        <a href="404.html">#PHP</a>
                    </div>
                    <a href="blog/<?= $article->url ?>" class="blogPage_gallery__item_header__title">
                        <?= $article->title ?>
                    </a>
                </div><!-- end blog_gallery__item_header -->
                <a href="post.html" class="blogPage_gallery__item_img">
                    <img src="/img/png/yii_framework.png" alt="post_image">
                </a><!-- end blog_gallery__item_img -->
                <div class="blogPage_gallery__item_footer">
                    <a href="404.html" class="blogPage_gallery__item_footer__date">19 / 09 / 2020</a>
                    <a href="404.html" class="blogPage_gallery__item_footer__author">Антон Панченко</a>
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
<!--                <a href="404.html" class="blogPage_gallery__pagination_item active">1</a>-->
<!--                <a href="404.html" class="blogPage_gallery__pagination_item">2</a>-->
<!--                <a href="404.html" class="blogPage_gallery__pagination_item">3</a>-->
<!--                <a href="404.html" class="blogPage_gallery__pagination_item">4</a>-->
<!--                <a href="404.html" class="blogPage_gallery__pagination_item">5</a>-->
            </div><!-- end blogPage_gallery__pagination -->
        </div><!-- end blogPage_gallery -->
        <div class="blogPage_sidebar">
            <div class="blogPage_sidebar__categories">
                <h3 class="blogPage_sidebar__categories_title">
                    Категории
                </h3><!-- end blogPage_sidebar__categories_title -->
                <div class="blogPage_sidebar__categories_items">
                    <div class="blogPage_sidebar__categories_items__item">
                        <a href="404.html" class="blogPage_sidebar__categories_items__item_text">Front-end</a>
                        <p class="blogPage_sidebar__categories_items__item_counter">(2)</p>
                    </div><!-- end blogPage_sidebar__categories_items__item -->
                    <div class="blogPage_sidebar__categories_items__item">
                        <a href="404.html" class="blogPage_sidebar__categories_items__item_text">Back-end</a>
                        <p class="blogPage_sidebar__categories_items__item_counter">(1)</p>
                    </div><!-- end blogPage_sidebar__categories_items__item -->
                    <div class="blogPage_sidebar__categories_items__item">
                        <a href="404.html" class="blogPage_sidebar__categories_items__item_text">Приложения</a>
                        <p class="blogPage_sidebar__categories_items__item_counter">(0)</p>
                    </div><!-- end blogPage_sidebar__categories_items__item -->
                    <div class="blogPage_sidebar__categories_items__item">
                        <a href="404.html" class="blogPage_sidebar__categories_items__item_text">Верстка</a>
                        <p class="blogPage_sidebar__categories_items__item_counter">(0)</p>
                    </div><!-- end blogPage_sidebar__categories_items__item -->
                    <div class="blogPage_sidebar__categories_items__item">
                        <a href="404.html" class="blogPage_sidebar__categories_items__item_text">Физика</a>
                        <p class="blogPage_sidebar__categories_items__item_counter">(0)</p>
                    </div><!-- end blogPage_sidebar__categories_items__item -->
                    <div class="blogPage_sidebar__categories_items__item">
                        <a href="404.html" class="blogPage_sidebar__categories_items__item_text">Музыка</a>
                        <p class="blogPage_sidebar__categories_items__item_counter">(0)</p>
                    </div><!-- end blogPage_sidebar__categories_items__item -->
                </div><!-- end blogPage_sidebar__categories_items -->
            </div><!-- end blogPage_sidebar__categories -->
            <div class="blogPage_sidebar__popPosts">
                <h3 class="blogPage_sidebar__popPosts_title">
                    Популярные статьи
                </h3><!-- end blogPage_sidebar__popPosts_title -->
                <div class="blogPage_sidebar__popPosts_items">
                    <div class="blogPage_sidebar__popPosts_items__item">
                        <a href="404.html" class="blogPage_sidebar__popPosts_items__item_date">
                            20 / 09 / 2020
                        </a>
                        <a href="post.html" class="blogPage_sidebar__popPosts_items__item_title">
                            Обработка появления на экране без плагинов
                        </a>
                        <a href="404.html" class="blogPage_sidebar__popPosts_items__item_comments">
                            0 комментариев
                        </a>
                    </div><!-- end blogPage_sidebar__popPosts_items__item -->
                    <div class="blogPage_sidebar__popPosts_items__item">
                        <a href="404.html" class="blogPage_sidebar__popPosts_items__item_date">
                            20 / 09 / 2020
                        </a>
                        <a href="post.html" class="blogPage_sidebar__popPosts_items__item_title">
                            Простой прелоадер на чистом JavaScript
                        </a>
                        <a href="404.html" class="blogPage_sidebar__popPosts_items__item_comments">
                            0 комментариев
                        </a>
                    </div><!-- end blogPage_sidebar__popPosts_items__item -->
                    <div class="blogPage_sidebar__popPosts_items__item">
                        <a href="404.html" class="blogPage_sidebar__popPosts_items__item_date">
                            19 / 09 / 2020
                        </a>
                        <a href="post.html" class="blogPage_sidebar__popPosts_items__item_title">
                            Yii2-advanсed. Установка и первая настройка
                        </a>
                        <a href="404.html" class="blogPage_sidebar__popPosts_items__item_comments">
                            0 комментариев
                        </a>
                    </div><!-- end blogPage_sidebar__popPosts_items__item -->
                </div><!-- end blogPage_sidebar__popPosts_items -->
            </div><!-- end blogPage_sidebar__popPosts -->
            <div class="blogPage_sidebar__tags">
                <div class="blogPage_sidebar__tags_title">
                    Теги
                </div>
                <div class="blogPage_sidebar__tags_items">
                    <a href="404.html" class="blogPage_sidebar__tags_items__item">#Yii2</a>
                    <a href="404.html" class="blogPage_sidebar__tags_items__item">#PHP</a>
                    <a href="404.html" class="blogPage_sidebar__tags_items__item">#HTML5</a>
                    <a href="404.html" class="blogPage_sidebar__tags_items__item">#CSS</a>
                    <a href="404.html" class="blogPage_sidebar__tags_items__item">#JS</a>
                </div>
            </div><!-- end blogPage_sidebar__tags -->
        </div><!-- end blogPage_sidebar -->
    </div><!-- end blogPage_wrap -->
</section><!-- end blog -->