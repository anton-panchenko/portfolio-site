<?php

/* @var $this yii\web\View */
/* @var $projects \frontend\models\repositories\ProjectRepository */

use frontend\models\repositories\ProjectRepository;
use yii\helpers\Url;

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
</div><!-- end works -->
