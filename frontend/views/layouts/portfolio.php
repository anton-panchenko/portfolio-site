<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\widgets\multiLang\MultiLang;

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

    <div class="head_menu" id="head_menu">
        <?= Html::a(Yii::t('main', 'About'), '#', ['class' => 'fixed_menu__item redirectLink']) ?>
        <?= Html::a(Yii::t('main', 'CV'), '#', ['class' => 'fixed_menu__item redirectLink']) ?>
        <?= Html::a(Yii::t('main', 'Portfolio'), '#', ['class' => 'fixed_menu__item redirectLink']) ?>
        <?= Html::a(Yii::t('main', 'Blog'), '#', ['class' => 'fixed_menu__item redirectLink']) ?>
        <?= Html::a(Yii::t('main', 'Contacts'), '#', ['class' => 'fixed_menu__item redirectLink']) ?>

        <?= MultiLang::widget(); ?>

    </div><!-- end head_menu -->

    <div class="fixed_menu">

        <?= Html::a(Yii::t('main', 'About'), '#', ['class' => 'fixed_menu__item redirectLink']) ?>
        <?= Html::a(Yii::t('main', 'CV'), '#', ['class' => 'fixed_menu__item redirectLink']) ?>
        <?= Html::a(Yii::t('main', 'Portfolio'), '#', ['class' => 'fixed_menu__item redirectLink']) ?>
        <?= Html::a(Yii::t('main', 'Blog'), '#', ['class' => 'fixed_menu__item redirectLink']) ?>
        <?= Html::a(Yii::t('main', 'Contacts'), '#', ['class' => 'fixed_menu__item redirectLink']) ?>

        <?= MultiLang::widget(); ?>
        
    </div><!-- end fixed_menu -->

    <a href="#head_menu" class="scrollToTop" id="scrollToTop">
        <i class="icon-up"></i>
    </a><!-- end scrollToTop -->

    <?= $content ?>

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
