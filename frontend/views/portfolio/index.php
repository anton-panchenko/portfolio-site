<?php

/* @var $this yii\web\View */

$this->title = 'Портфолио | Работы';
?>

<div class="works">
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
        <a href="projects/planning/index.html" class="grid-item program" target="_blank">
            <img src="/img/png/planning.png" alt="project_link">
            <div class="works_gallery__hover_content">
                <div class="works_gallery__hover_content_wrap">
                    <h3 class="works_gallery__hover_content__title">
                        Planning
                    </h3>
                    <p class="works_gallery__hover_content__description">
                        Локальный аналог таскменеджера Trello. Все задачи сохнаняются в localstorage и доступны после перезагрузки или закрытия браузера.
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
        <a href="projects/mitalent/index.html" class="grid-item landing" target="_blank">
            <img src="/img/png/mitalent.png" alt="project_link">
            <div class="works_gallery__hover_content">
                <div class="works_gallery__hover_content_wrap">
                    <h3 class="works_gallery__hover_content__title">
                        Mitalent
                    </h3>
                    <p class="works_gallery__hover_content__description">
                        Простой шаблон для страницы, которая подойдет для блога или небольшого новостного сайта.
                    </p>
                </div>
            </div>
        </a><!-- end grid-item -->
        <a href="projects/cuda/index.html" class="grid-item landing" target="_blank">
            <img src="/img/png/cuda.png" alt="project_link">
            <div class="works_gallery__hover_content">
                <div class="works_gallery__hover_content_wrap">
                    <h3 class="works_gallery__hover_content__title">
                        Cuda
                    </h3>
                    <p class="works_gallery__hover_content__description">
                        Очень простой шаблон лендинга, который подойдет для визитки или сайта продажи небольшой группы товаров.
                    </p>
                </div>
            </div>
        </a><!-- end grid-item -->
        <a href="projects/sparkle/index.html" class="grid-item landing" target="_blank">
            <img src="/img/png/sparkie.png" alt="project_link">
            <div class="works_gallery__hover_content">
                <div class="works_gallery__hover_content_wrap">
                    <h3 class="works_gallery__hover_content__title">
                        Sparkle
                    </h3>
                    <p class="works_gallery__hover_content__description">
                        Простой шаблон сайта визитки.
                    </p>
                </div>
            </div>
        </a><!-- end grid-item -->
    </div><!-- end works_gallery -->
</div><!-- end works -->
