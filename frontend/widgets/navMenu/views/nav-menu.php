<?php

namespace frontend\widgets\navMenu;

use Yii;
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\widgets\register\Register;
use frontend\widgets\multiLang\MultiLang;

/* @var $cssClass string */
/* @var $idName string */
/* @var $location string */

?>

<?php if ($location === 'blog'): ?>

    <div class="<?= $cssClass ?>" id="<?= $idName ?>">

        <?= Html::a(Yii::t('main', 'About'),
            Url::to('/site/index#blockAbout'),
            ['class' => 'fixed_menu__item redirectLink'])
        ?>
        <?= Html::a(Yii::t('main', 'CV'),
            Url::to('/site/index#blockResume'),
            ['class' => 'fixed_menu__item redirectLink'])
        ?>
        <?= Html::a(Yii::t('main', 'Portfolio'),
            Url::to('/site/index#blockWorks'),
            ['class' => 'fixed_menu__item redirectLink'])
        ?>
        <?= Html::a(Yii::t('main', 'Blog'),
            Url::to('/site/index#blockBlog'),
            ['class' => 'fixed_menu__item redirectLink'])
        ?>
        <?= Html::a(Yii::t('main', 'Contacts'),
            Url::to('/site/index#blockContacts'),
            ['class' => 'fixed_menu__item redirectLink'])
        ?>

        <?= Register::widget(); ?>

        <?= MultiLang::widget(); ?>

    </div>

<?php endif; ?>

<?php if ($location === 'main'): ?>

    <div class="<?= $cssClass ?>" id="<?= $idName ?>">

        <?= Html::a(Yii::t('main', 'About'),
            Url::to('#blockAbout'),
            ['class' => 'fixed_menu__item', 'data-menu' => '1'])
        ?>
        <?= Html::a(Yii::t('main', 'CV'),
            Url::to('#blockResume'),
            ['class' => 'fixed_menu__item', 'data-menu' => '2'])
        ?>
        <?= Html::a(Yii::t('main', 'Portfolio'),
            Url::to('#blockWorks'),
            ['class' => 'fixed_menu__item', 'data-menu' => '3'])
        ?>
        <?= Html::a(Yii::t('main', 'Blog'),
            Url::to('#blockBlog'),
            ['class' => 'fixed_menu__item', 'data-menu' => '4'])
        ?>
        <?= Html::a(Yii::t('main', 'Contacts'),
            Url::to('#blockContacts'),
            ['class' => 'fixed_menu__item', 'data-menu' => '5'])
        ?>

        <?= MultiLang::widget(); ?>

    </div>

<?php endif; ?>