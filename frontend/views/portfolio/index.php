<?php

/* @var $this yii\web\View */
/* @var $projects \frontend\models\repositories\ProjectRepository */

use yii\helpers\Url;
use frontend\models\repositories\ProjectRepository;

$this->title = Yii::t('main', 'Portfolio | My works');
?>

<div class="works">
    <div class="section_title">
        <div class="section_title__img">
            <img src="/img/svg/portfolio.svg" alt="about">
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
            <?= Yii::t('main', 'Dashboards') ?>
        </a>
        <a href="" class="works_filter__item filter-btn" data-filter=".landing">
            Landing-page
        </a>
        <a href="" class="works_filter__item filter-btn" data-filter=".shop">
            <?= Yii::t('main', 'Shops') ?>
        </a>
        <a href="" class="works_filter__item filter-btn" data-filter=".program">
            <?= Yii::t('main', 'Apps') ?>
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
