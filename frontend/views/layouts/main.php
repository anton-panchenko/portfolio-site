<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use common\widgets\Alert;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\navMenu\NavMenu;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BNFCNS3108"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-BNFCNS3108');
    </script>

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

    <?= NavMenu::widget([
        'location' => 'main',
        'cssClass' => 'fixed_menu menuOnMain',
        'idName' => '',
    ]); ?>

    <footer class="footer">
        <p class="footer_text">
            2020. <?= Yii::t('main', 'Anton Panchenko') ?>
        </p>
    </footer>

</div><!--end app-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
