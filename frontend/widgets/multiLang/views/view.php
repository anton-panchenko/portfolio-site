<?php

namespace frontend\widgets\multiLang;

use yii\helpers\Html;
use Yii;
use yii\helpers\Url;

?>


<?php if (Yii::$app->language == 'en'): ?>

<?= Html::a('ru', Url::current(['language' => 'ru']), ['class' => 'fixed_menu__item widget_lang_link']); ?>

<?php else: ?>

<?= Html::a('en', Url::current(['language' => 'en']), ['class' => 'fixed_menu__item widget_lang_link']); ?>

<?php endif; ?>