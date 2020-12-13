<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Url;
use yii\helpers\Html;
use common\widgets\Alert;
use frontend\assets\AppAsset;
use frontend\widgets\navMenu\NavMenu;
use frontend\widgets\multiLang\MultiLang;

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

    <?= NavMenu::widget([
        'location' => 'blog',
        'cssClass' => 'head_menu',
        'idName' => 'head_menu',
    ]); ?>

    <?= NavMenu::widget([
        'location' => 'blog',
        'cssClass' => 'fixed_menu',
        'idName' => '',
    ]); ?>

    <a href="#head_menu" class="scrollToTop" id="scrollToTop">
        <i class="icon-up"></i>
    </a><!-- end scrollToTop -->

    <?= $content ?>

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
