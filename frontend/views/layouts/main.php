<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div id="pagePreloader">
    <img src="/img/gif/loading_pencil.gif" alt="preload">
</div>

<div class="app" id="app">

    <?= $content ?>

    <a href="#blockHeader" class="scrollToTop" id="scrollToTop">
        <i class="icon-up"></i>
    </a><!-- end scrollToTop -->

    <div class="fixed_menu">
        <a href="#blockAbout" class="fixed_menu__item" data-menu="1">Обо мне</a>
        <a href="#blockResume" class="fixed_menu__item" data-menu="2">Резюме</a>
        <a href="#blockWorks" class="fixed_menu__item" data-menu="3">Портфолио</a>
        <a href="#blockBlog" class="fixed_menu__item" data-menu="4">Блог</a>
        <a href="#blockContacts" class="fixed_menu__item" data-menu="5">Контакты</a>
    </div><!-- end fixed_menu -->

    <footer class="footer">
        <p class="footer_text">
            2020. Антон Панченко
        </p>
    </footer>

</div><!--end app-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
