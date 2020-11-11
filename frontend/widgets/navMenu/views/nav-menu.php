<?php

namespace frontend\widgets\navMenu;

use Yii;
use yii\helpers\Html;
use frontend\widgets\multiLang\MultiLang;

/* @var $cssClass string */
/* @var $idName string */

?>

<div class="<?= $cssClass ?>" id="<?= $idName ?>">

    <?= Html::a(Yii::t('main', 'About'), '#', ['class' => 'fixed_menu__item redirectLink']) ?>
    <?= Html::a(Yii::t('main', 'CV'), '#', ['class' => 'fixed_menu__item redirectLink']) ?>
    <?= Html::a(Yii::t('main', 'Portfolio'), '#', ['class' => 'fixed_menu__item redirectLink']) ?>
    <?= Html::a(Yii::t('main', 'Blog'), '#', ['class' => 'fixed_menu__item redirectLink']) ?>
    <?= Html::a(Yii::t('main', 'Contacts'), '#', ['class' => 'fixed_menu__item redirectLink']) ?>

    <?= MultiLang::widget(); ?>

</div>
