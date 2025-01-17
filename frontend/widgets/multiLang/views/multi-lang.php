<?php

namespace frontend\widgets\multiLang;

use Yii;
use yii\helpers\Url;
use yii\helpers\Html;

?>


<?php if (Yii::$app->language == 'en'): ?>

<?= Html::a('ru', Url::current(['language' => 'ru']), ['class' => 'fixed_menu__item widget_lang_link']); ?>

<?php else: ?>

<?= Html::a('en', Url::current(['language' => 'en']), ['class' => 'fixed_menu__item widget_lang_link']); ?>

<?php endif; ?>