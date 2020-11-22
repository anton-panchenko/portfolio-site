<?php

namespace frontend\widgets\register;

use Yii;
use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="widget_register">

    <?php if (!Yii::$app->user->isGuest): ?>
        <?= Html::a(Yii::t('main', 'Logout'), Url::to('/auth/logout'), ['class' => 'fixed_menu__item']) ?>
    <?php else: ?>
        <?= Html::a(Yii::t('main', 'Login'), Url::to('/auth/login'), ['class' => 'fixed_menu__item']) ?>
        <?= Html::a(Yii::t('main', 'Register'), Url::to('/auth/signup'), ['class' => 'fixed_menu__item']) ?>
    <?php endif; ?>

</div>
