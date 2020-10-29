<?php

/* @var $this yii\web\View */
/* @var $contactForm \frontend\models\ContactForm */

$this->title = Yii::t('main', 'Portfolio | Home');

use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>

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
                    <p class="header_menu__item_text">Обо мне</p>
                </a>
            </div><!-- end header_menu__item -->
            <div class="header_menu__item">
                <a href="#blockResume" class="header_menu__item_link">
                    <img src="/img/svg/menu-resume.svg" alt="resume" class="header_menu__item_img">
                    <p class="header_menu__item_text">Резюме</p>
                </a>
            </div><!-- end header_menu__item -->
            <div class="header_menu__item">
                <a href="#blockWorks" class="header_menu__item_link">
                    <img src="/img/svg/menu-portfolio.svg" alt="portfolio" class="header_menu__item_img">
                    <p class="header_menu__item_text">Портфолио</p>
                </a>
            </div><!-- end header_menu__item -->
            <div class="header_menu__item">
                <a href="#blockBlog" class="header_menu__item_link">
                    <img src="/img/svg/menu-blog.svg" alt="blog" class="header_menu__item_img">
                    <p class="header_menu__item_text">Блог</p>
                </a>
            </div><!-- end header_menu__item -->
            <div class="header_menu__item">
                <a href="#blockContacts" class="header_menu__item_link">
                    <img src="/img/svg/menu-contacts.svg" alt="contacts" class="header_menu__item_img">
                    <p class="header_menu__item_text">Контакты</p>
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
        <h2 class="section_title__text">Обо мне</h2>
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
        <a href="docs/CV_Panchenko_AV.pdf" class="btn btn-dark" target="_blank">Загрузить резюме</a>
        <!--        <a href="#" class="btn btn-light">Напечатать резюме</a>-->
    </div><!-- end about_buttons -->
</section><!-- end about -->
<section class="section resume" id="blockResume" data-menu="2">
    <div class="section_title">
        <div class="section_title__img">
            <img src="/img/svg/resume.svg" alt="about">
        </div>
        <h2 class="section_title__text">
            Резюме
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
                                20%
                            </p>
                        </div>
                        <div class="resume_content__item_progress">
                            <div class="resume_content__item_progress__up" data-value="20"></div>
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
                                Photoshop
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
            <img src="/img/svg/portfolio.svg" alt="about">
        </div>
        <h2 class="section_title__text">
            Мои работы
        </h2>
    </div><!-- end section_title -->
    <div class="works_filter filters-button">
        <a href="" class="works_filter__item filter-btn" data-filter="*" id="btnAll">
            Все
        </a>
        <a href="" class="works_filter__item filter-btn" data-filter=".dashboard">
            Dashboards
        </a>
        <a href="" class="works_filter__item filter-btn" data-filter=".landing">
            Landing-page
        </a>
        <a href="" class="works_filter__item filter-btn" data-filter=".program">
            App
        </a>
    </div><!-- end works_filter -->
    <div class="works_gallery grid" id="grid">
        <a href="projects/dashboard2/index.html" class="grid-item dashboard" target="_blank">
            <img src="/img/png/admin_dashboard_2.png" alt="project_link">
            <div class="works_gallery__hover_content">
                <div class="works_gallery__hover_content_wrap">
                    <h3 class="works_gallery__hover_content__title">
                        Админпанель
                    </h3>
                    <p class="works_gallery__hover_content__description">
                        Адаптивная админпанель для сайта онлайн курсов. В ней отслеживается вся необходимая статистика для сайта небольшой школы.
                    </p>
                </div>
            </div>
        </a><!-- end grid-item -->
        <a href="projects/crios/index.html" class="grid-item landing" target="_blank">
            <img src="/img/png/crios.png" alt="project_link">
            <div class="works_gallery__hover_content">
                <div class="works_gallery__hover_content_wrap">
                    <h3 class="works_gallery__hover_content__title">
                        Crios
                    </h3>
                    <p class="works_gallery__hover_content__description">
                        Универсальный лендинг в светлых тонах, который может быть применен практически для любого сайта. Шаблон адаптивный и содержит меню, удобное для любых устройств.
                    </p>
                </div>
            </div>
        </a><!-- end grid-item -->
        <a href="projects/csscalc/index.html" class="grid-item program" target="_blank">
            <img src="/img/png/css_calc.png" alt="project_link">
            <div class="works_gallery__hover_content">
                <div class="works_gallery__hover_content_wrap">
                    <h3 class="works_gallery__hover_content__title">
                        CSS Calc
                    </h3>
                    <p class="works_gallery__hover_content__description">
                        Расчетная страница для верстальщиков. Позволяет быстрее работать над адаптивностью шрифтов и расстояний. Реализовано выделение и копирование в буфер по клику.
                    </p>
                </div>
            </div>
        </a><!-- end grid-item -->
        <a href="projects/dashboard1/index.html" class="grid-item dashboard" target="_blank">
            <img src="/img/png/admin_dashboard_1.png" alt="project_link">
            <div class="works_gallery__hover_content">
                <div class="works_gallery__hover_content_wrap">
                    <h3 class="works_gallery__hover_content__title">
                        Админпанель
                    </h3>
                    <p class="works_gallery__hover_content__description">
                        Адаптивная админпанель для сайта мобильной игры. Содержит анимированные графики со стастикой по разнообразным показателям.
                    </p>
                </div>
            </div>
        </a><!-- end grid-item -->
    </div><!-- end works_gallery -->
    <div class="section_buttons">
        <a href="portfolio.html" class="btn btn-dark" target="_blank">Все работы</a>
    </div><!-- end section_buttons -->
</section><!-- end works -->
<section class="section blog" id="blockBlog" data-menu="4">
    <div class="section_title">
        <div class="section_title__img">
            <img src="/img/svg/blog.svg" alt="about">
        </div>
        <h2 class="section_title__text">
            Блог
        </h2>
    </div><!-- end section_title -->
    <div class="blog_gallery">
        <div class="blog_gallery__item">
            <div class="blog_gallery__item_header">
                <div class="blog_gallery__item_header__tags">
                    <a href="404.html">#Yii2</a>
                    <a href="404.html">#PHP</a>
                </div>
                <a href="post.html" class="blog_gallery__item_header__title">
                    Yii2-advanсed. Установка и первая настройка
                </a>
            </div><!-- end blog_gallery__item_header -->
            <a href="post.html" class="blog_gallery__item_img">
                <img src="/img/png/yii_framework.png" alt="post_image">
            </a><!-- end blog_gallery__item_img -->
            <div class="blog_gallery__item_footer">
                <a href="404.html" class="blog_gallery__item_footer__date">19 / 09 / 2020</a>
                <a href="404.html" class="blog_gallery__item_footer__author">Антон Панченко</a>
            </div><!-- end blog_gallery__item_footer -->
        </div><!-- end blog_gallery__item -->
        <div class="blog_gallery__item">
            <div class="blog_gallery__item_header">
                <div class="blog_gallery__item_header__tags">
                    <a href="404.html">#HTML5</a>
                    <a href="404.html">#CSS3</a>
                    <a href="404.html">#JS</a>
                </div>
                <a href="post.html" class="blog_gallery__item_header__title">
                    Простой прелоадер на чистом JavaScript
                </a>
            </div><!-- end blog_gallery__item_header -->
            <a href="post.html" class="blog_gallery__item_img">
                <img src="/img/png/notebook.png" alt="post_image">
            </a><!-- end blog_gallery__item_img -->
            <div class="blog_gallery__item_footer">
                <a href="404.html" class="blog_gallery__item_footer__date">20 / 09 / 2020</a>
                <a href="404.html" class="blog_gallery__item_footer__author">Антон Панченко</a>
            </div><!-- end blog_gallery__item_footer -->
        </div><!-- end blog_gallery__item -->
    </div><!-- end blog_gallery -->
    <div class="section_buttons">
        <a href="blog.html" class="btn btn-dark" target="_blank">Все статьи</a>
    </div><!-- end section_buttons -->
</section><!-- end blog -->
<section class="section contacts" id="blockContacts" data-menu="5">
    <div class="section_title">
        <div class="section_title__img">
            <img src="/img/svg/contacts.svg" alt="about">
        </div>
        <h2 class="section_title__text">
            Контакты
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
