<?php

namespace frontend\widgets\navMenu;

use Yii;
use yii\helpers\Html;
use frontend\widgets\register\Register;
use frontend\widgets\multiLang\MultiLang;
use yii\helpers\Url;

/* @var $cssClass string */
/* @var $idName string */

?>

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
