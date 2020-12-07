<?php

/* @var $this yii\web\View */
/* @var $contactForm \frontend\models\ContactForm */
/* @var $articles \frontend\models\repositories\ArticleRepository */
/* @var $projects \frontend\models\repositories\ProjectRepository */

$this->title = Yii::t('main', 'Portfolio | Home');

use yii\helpers\Url;
use yii\helpers\Html;
use common\helpers\Date;
use yii\widgets\ActiveForm;
use frontend\models\repositories\ProjectRepository;
use frontend\models\repositories\ArticleRepository;

?>

<header class="section header" id="blockHeader">
    <div class="header_container">
        <div class="header_title">
            <h1 class="header_title__text">
                Привет! Меня зовут Антон Панченко<br>
                Это мой сайт
                <div class="header_title__photo">
                    <div class="header_title__photo__btn" id="btn_modal_window">
                        <i class="icon-camera"></i>
                    </div>
                </div><!-- end header_title__photo -->
            </h1><!-- end header_title__text -->
        </div><!-- end header_title -->
        <nav class="header_menu">
            <div class="header_menu__item">
                <a href="#blockAbout" class="header_menu__item_link">
                    <img src="/img/svg/menu-about.svg" alt="about" class="header_menu__item_img">
                    <p class="header_menu__item_text">
                        <?= Yii::t('main', 'About') ?>
                    </p>
                </a>
            </div><!-- end header_menu__item -->
            <div class="header_menu__item">
                <a href="#blockResume" class="header_menu__item_link">
                    <img src="/img/svg/menu-resume.svg" alt="resume" class="header_menu__item_img">
                    <p class="header_menu__item_text">
                        <?= Yii::t('main', 'CV') ?>
                    </p>
                </a>
            </div><!-- end header_menu__item -->
            <div class="header_menu__item">
                <a href="#blockWorks" class="header_menu__item_link">
                    <img src="/img/svg/menu-portfolio.svg" alt="portfolio" class="header_menu__item_img">
                    <p class="header_menu__item_text">
                        <?= Yii::t('main', 'Portfolio') ?>
                    </p>
                </a>
            </div><!-- end header_menu__item -->
            <div class="header_menu__item">
                <a href="#blockBlog" class="header_menu__item_link">
                    <img src="/img/svg/menu-blog.svg" alt="blog" class="header_menu__item_img">
                    <p class="header_menu__item_text">
                        <?= Yii::t('main', 'Blog') ?>
                    </p>
                </a>
            </div><!-- end header_menu__item -->
            <div class="header_menu__item">
                <a href="#blockContacts" class="header_menu__item_link">
                    <img src="/img/svg/menu-contacts.svg" alt="contacts" class="header_menu__item_img">
                    <p class="header_menu__item_text">
                        <?= Yii::t('main', 'Contacts') ?>
                    </p>
                </a>
            </div><!-- end header_menu__item -->
        </nav><!-- end header_menu -->
        <div class="header_socials">
            <a href="https://www.facebook.com/anton.panchenko.9" class="header_socials__item" target="_blank">facebook</a>
            <a href="https://www.linkedin.com/in/%D0%B0%D0%BD%D1%82%D0%BE%D0%BD-%D0%BF%D0%B0%D0%BD%D1%87%D0%B5%D0%BD%D0%BA%D0%BE-a1688516b/" class="header_socials__item" target="_blank">linkedin</a>
            <a href="https://www.instagram.com/toha_panchenko/" class="header_socials__item" target="_blank">instagram</a>
            <a href="https://github.com/anton-panchenko" class="header_socials__item" target="_blank">github</a>
        </div><!-- end header_socials -->
    </div><!-- end header_container -->
</header><!-- end header -->

<div id="my_modal" class="modal">
    <div class="modal_content">
        <div class="modal_content__photo">
            <img src="/img/png/self_photo.png" alt="self">
            <div class="modal_content__photo_closeBtn">×</div>
        </div>
    </div>
</div><!-- end modal -->
<section class="section about" id="blockAbout" data-menu="1">
    <div class="section_title">
        <div class="section_title__img">
            <img src="/img/svg/about.svg" alt="about">
        </div>
        <h2 class="section_title__text">
            <?= Yii::t('main', 'About') ?>
        </h2>
    </div><!-- end section_title -->
    <div class="about_content">
        <div class="about_facts about_content__item">
            <h3 class="about_facts__title">Коротко обо мне</h3>
            <div class="about_facts__items">
                <div class="about_facts__items_item">
                    <div class="about_facts__items_item__title">
                        Имя
                    </div>
                    <div class="about_facts__items_item__content">
                        Антон Панченко
                    </div>
                </div><!-- end about_facts__items_item -->
                <div class="about_facts__items_item">
                    <div class="about_facts__items_item__title">
                        Дата рождения
                    </div>
                    <div class="about_facts__items_item__content">
                        05 марта 1986
                    </div>
                </div><!-- end about_facts__items_item -->
                <div class="about_facts__items_item">
                    <div class="about_facts__items_item__title">
                        E-mail
                    </div>
                    <div class="about_facts__items_item__content">
                        info@anton-panchenko.com
                    </div>
                </div><!-- end about_facts__items_item -->
                <div class="about_facts__items_item">
                    <div class="about_facts__items_item__title">
                        Адрес
                    </div>
                    <div class="about_facts__items_item__content">
                        Покровская 121А, Житомир
                    </div>
                </div><!-- end about_facts__items_item -->
                <div class="about_facts__items_item">
                    <div class="about_facts__items_item__title">
                        Телефон
                    </div>
                    <div class="about_facts__items_item__content">
                        +38-097-263-10-76
                    </div>
                </div><!-- end about_facts__items_item -->
                <div class="about_facts__items_item">
                    <div class="about_facts__items_item__title">
                        Website
                    </div>
                    <div class="about_facts__items_item__content">
                        anton-panchenko.com
                    </div>
                </div><!-- end about_facts__items_item -->
            </div><!-- end about_description -->
        </div><!-- end about_facts -->
        <div class="about_description about_content__item">
            <h3 class="about_description__title">
                Я - веб разработчик
            </h3>
            <div class="about_description__text">
                <div class="about_description__text_first">
                    С начала 2020 года занимаюсь веб разработкой, но программированем увлекался со школьных лет. Уже сделал неколько разнообразных проектов.
                </div><!-- end about_description__text_first -->
                <div class="about_description__text_second">
                    Парраллельно изучаю и front, и back части веб-проетков. Использую для каждой части фреймворки, что дает возможность выполнить работу над вашим проектом в сжатые сроки и качественно.
                </div><!-- end about_description__text_second -->
            </div><!-- end about_description__text -->
        </div><!-- end about_description -->
    </div><!-- end about_content -->
    <div class="section_buttons">
        <a href="#" class="btn btn-dark" target="_blank">Загрузить резюме</a>
        <!--        <a href="#" class="btn btn-light">Напечатать резюме</a>-->
    </div><!-- end about_buttons -->
</section><!-- end about -->
<section class="section resume" id="blockResume" data-menu="2">
    <div class="section_title">
        <div class="section_title__img">
            <img src="/img/svg/resume.svg" alt="CV">
        </div>
        <h2 class="section_title__text">
            <?= Yii::t('main', 'CV') ?>
        </h2>
    </div><!-- end section_title -->
    <div class="resume_content">
        <div class="resume_content__title">
            Профессиональные навыки
        </div><!-- end resume_content__title -->
        <div class="resume_content__parts">
            <div class="resume_content__parts_row">
                <div class="resume_content__parts_row__col">
                    <div class="resume_content__item">
                        <div class="resume_content__item_text">
                            <p class="resume_content__item_text__title">
                                HTML5 & CSS3
                            </p>
                            <p class="resume_content__item_text__value">
                                80%
                            </p>
                        </div>
                        <div class="resume_content__item_progress">
                            <div class="resume_content__item_progress__up" data-value="80"></div>
                        </div>
                    </div><!-- end resume_content__item -->
                    <div class="resume_content__item">
                        <div class="resume_content__item_text">
                            <p class="resume_content__item_text__title">
                                PHP
                            </p>
                            <p class="resume_content__item_text__value">
                                40%
                            </p>
                        </div>
                        <div class="resume_content__item_progress">
                            <div class="resume_content__item_progress__up" data-value="40"></div>
                        </div>
                    </div><!-- end resume_content__item -->
                </div><!-- end resume_content__parts_row__col -->
                <div class="resume_content__parts_row__col">
                    <div class="resume_content__item">
                        <div class="resume_content__item_text">
                            <p class="resume_content__item_text__title">
                                Java Script
                            </p>
                            <p class="resume_content__item_text__value">
                                40%
                            </p>
                        </div>
                        <div class="resume_content__item_progress">
                            <div class="resume_content__item_progress__up" data-value="40"></div>
                        </div>
                    </div><!-- end resume_content__item -->
                    <div class="resume_content__item">
                        <div class="resume_content__item_text">
                            <p class="resume_content__item_text__title">
                                Yii2
                            </p>
                            <p class="resume_content__item_text__value">
                                50%
                            </p>
                        </div>
                        <div class="resume_content__item_progress">
                            <div class="resume_content__item_progress__up" data-value="50"></div>
                        </div>
                    </div><!-- end resume_content__item -->
                </div><!-- end resume_content__parts_row__col -->
            </div><!-- end resume_content__parts_row -->
            <div class="resume_content__parts_row">
                <div class="resume_content__parts_row__col">
                    <img src="/img/svg/devices.svg" alt="devices" class="resume_content__parts_row__col_img">
                </div><!-- end resume_content__parts_row__col -->
                <div class="resume_content__parts_row__col">
                    <p class="resume_opportunities__item">
                        Верстаю адаптивные страницы
                    </p><!-- end resume_opportunities__item -->
                    <p class="resume_opportunities__item">
                        Использованую библиотеку jQuery
                    </p><!-- end resume_opportunities__item -->
                    <p class="resume_opportunities__item">
                        Использую препроцессор SASS
                    </p><!-- end resume_opportunities__item -->
                    <p class="resume_opportunities__item">
                        Использую таскраннер GULP
                    </p><!-- end resume_opportunities__item -->
                    <p class="resume_opportunities__item">
                        Умею планировать свое время
                    </p><!-- end resume_opportunities__item -->
                    <p class="resume_opportunities__item">
                        Все время совершенствуюсь
                    </p><!-- end resume_opportunities__item -->
                </div><!-- end resume_content__parts_row__col -->
            </div><!-- end resume_content__parts_row -->
        </div><!-- end resume_content__parts -->
    </div><!-- end resume_content -->
</section><!-- end resume -->
<section class="section works" id="blockWorks" data-menu="3">
    <div class="section_title">
        <div class="section_title__img">
            <img src="/img/svg/portfolio.svg" alt="portfolio">
        </div>
        <h2 class="section_title__text">
            <?= Yii::t('main', 'Portfolio') ?>
        </h2>
    </div><!-- end section_title -->
    <div class="works_filter filters-button">
        <a href="" class="works_filter__item filter-btn" data-filter="*" id="btnAll">
            <?= Yii::t('main', 'All') ?>
        </a>
        <a href="" class="works_filter__item filter-btn" data-filter=".dashboard">
            Dashboards
        </a>
        <a href="" class="works_filter__item filter-btn" data-filter=".landing">
            Landing-page
        </a>
        <a href="" class="works_filter__item filter-btn" data-filter=".shop">
            Shop
        </a>
        <a href="" class="works_filter__item filter-btn" data-filter=".program">
            App
        </a>
    </div><!-- end works_filter -->
    <div class="works_gallery grid" id="grid">

        <?php foreach ($projects as $project): ?>
        <a href="<?= Url::to($project->getUrl()) ?>" class="grid-item <?= $project->getFilterClass() ?>" target="_blank">
            <img src="<?= ProjectRepository::getImageByPath($project->getImage()) ?>" alt="project_link">
            <div class="works_gallery__hover_content">
                <div class="works_gallery__hover_content_wrap">
                    <h3 class="works_gallery__hover_content__title">
                        <?= $project->getTitle() ?>
                    </h3>
                    <p class="works_gallery__hover_content__description">
                        <?= $project->getDescription() ?>
                    </p>
                </div>
            </div>
        </a><!-- end grid-item -->
        <?php endforeach; ?>

    </div><!-- end works_gallery -->
    <div class="section_buttons">
        <a href="<?= Url::to('/portfolio') ?>" class="btn btn-dark" target="_blank">Все работы</a>
    </div><!-- end section_buttons -->
</section><!-- end works -->

<section class="section blog" id="blockBlog" data-menu="4">
    <div class="section_title">
        <div class="section_title__img">
            <img src="/img/svg/blog.svg" alt="about">
        </div>
        <h2 class="section_title__text">
            <?= Yii::t('blog', 'Blog') ?>
        </h2>
    </div><!-- end section_title -->
    <div class="blog_gallery">

        <?php foreach ($articles as $article): ?>
        <div class="blog_gallery__item">
            <div class="blog_gallery__item_header">
                <div class="blog_gallery__item_header__tags">
                    <?php foreach ($article->getTagsModel() as $tag): ?>
                        <a href="<?= Url::to('/blog/tag/'.$tag->getId()) ?>">#<?= $tag->getTitle() ?></a>
                    <?php endforeach; ?>
                </div>
                <a href="<?= Url::to('/article/'.$article->getUrl()); ?>" class="blogPage_gallery__item_header__title">
                    <?= $article->getTitle() ?>
                </a>
            </div><!-- end blog_gallery__item_header -->
            <a href="<?= Url::to('/article/'.$article->getUrl()) ?>" class="blog_gallery__item_img">
                <img src="<?= ArticleRepository::getImageByPath($article->getImage()); ?>"  alt="post_image">
            </a><!-- end blog_gallery__item_img -->
            <div class="blog_gallery__item_footer">
                <p class="blog_gallery__item_footer__date">
                    <?= Date::getDate($article->getUpdatedAt()); ?>
                </p>
                <a href="<?= Url::to('/blog/'.$article->getCategoryId()) ?>" class="blog_gallery__item_footer__author">
                    <?= $article->getCategoryTitle() ?>
                </a>
            </div><!-- end blog_gallery__item_footer -->
        </div><!-- end blog_gallery__item -->
        <?php endforeach; ?>

    </div><!-- end blog_gallery -->
    <div class="section_buttons">
        <a href="<?= Url::to('/blog/') ?>" class="btn btn-dark" target="_blank">
            <?= Yii::t('main', 'All articles') ?>
        </a>
    </div><!-- end section_buttons -->
</section><!-- end blog -->

<section class="section contacts" id="blockContacts" data-menu="5">
    <div class="section_title">
        <div class="section_title__img">
            <img src="/img/svg/contacts.svg" alt="about">
        </div>
        <h2 class="section_title__text">
            <?= Yii::t('main', 'Contacts') ?>
        </h2>
    </div><!-- end section_title -->
    <div class="contacts_content">
        <div class="contacts_content__info">
            <div class="contacts_content__info_item">
                <div class="contacts_content__info_item__title">
                    E-mail
                </div>
                <div class="contacts_content__info_item__content">
                    info@anton-panchenko.com
                </div>
            </div><!-- end contacts_content__info_item -->
            <div class="contacts_content__info_item">
                <div class="contacts_content__info_item__title">
                    Адрес
                </div>
                <div class="contacts_content__info_item__content">
                    Покровская 121А, Житомир
                </div>
            </div><!-- end contacts_content__info_item -->
            <div class="contacts_content__info_item">
                <div class="contacts_content__info_item__title">
                    Телефон
                </div>
                <div class="contacts_content__info_item__content">
                    +38-097-263-10-76
                </div>
            </div><!-- end contacts_content__info_item -->
            <div class="contacts_content__info_item">
                <div class="contacts_content__info_item__title">
                    Website
                </div>
                <div class="contacts_content__info_item__content">
                    anton-panchenko.com
                </div>
            </div><!-- end contacts_content__info_item -->
            <div class="contacts_content__info_socials">
                <a href="https://www.facebook.com/anton.panchenko.9" class="contacts_content__info_socials__item" target="_blank">
                    <i class="icon-facebook"></i>
                </a>
                <a href="https://www.instagram.com/toha_panchenko/" class="contacts_content__info_socials__item" target="_blank">
                    <i class="icon-instagram"></i>
                </a>
                <a href="https://www.linkedin.com/in/%D0%B0%D0%BD%D1%82%D0%BE%D0%BD-%D0%BF%D0%B0%D0%BD%D1%87%D0%B5%D0%BD%D0%BA%D0%BE-a1688516b/" class="contacts_content__info_socials__item" target="_blank">
                    <i class="icon-linkedin"></i>
                </a>
                <a href="https://github.com/anton-panchenko" class="contacts_content__info_socials__item" target="_blank">
                    <i class="icon-github"></i>
                </a>
            </div><!-- end contacts_content__info_socials -->
        </div><!-- end contacts_content__info -->

        <div class="contacts_content__form">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

            <?= $form->field($contactForm, 'name')->textInput(['autofocus' => true, 'class' => 'input-text', 'placeholder' => 'Имя'])->label(false) ?>

            <?= $form->field($contactForm, 'email')->textInput(['class' => 'input-text', 'placeholder' => 'Email'])->label(false) ?>

            <?= $form->field($contactForm, 'subject')->textInput(['class' => 'input-text', 'placeholder' => 'Тема'])->label(false) ?>

            <?= $form->field($contactForm, 'body')->textarea(['rows' => 6, 'class' => 'input-textarea', 'placeholder' => 'Сообщение'])->label(false) ?>

            <div class="form-group">
                <?= Html::submitButton('Отправить', ['class' => 'btn btn-dark', 'name' => 'contact-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>

    </div><!-- end contacts_content -->
</section><!-- end contacts -->
