<?php

namespace frontend\widgets\register;

use Yii;
use yii\helpers\Html;

?>

<div class="widget_register">

    <?php if (!Yii::$app->user->isGuest): ?>
        <?= Html::a(Yii::t('main', 'Logout'), '/auth/logout', ['class' => 'fixed_menu__item']) ?>
    <?php else: ?>
        <?= Html::a(Yii::t('main', 'Login'), '/auth/login', ['class' => 'fixed_menu__item']) ?>
        <?= Html::a(Yii::t('main', 'Register'), '/auth/signup', ['class' => 'fixed_menu__item']) ?>
    <?php endif; ?>

</div>
