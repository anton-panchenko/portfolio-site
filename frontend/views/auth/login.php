<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Вход';

?>
<div class="site-login auth_view">

    <div class="auth_form_wrap">

        <div class="section_title">
            <div class="section_title__img">
                <img src="/img/svg/contacts.svg" alt="about">
            </div>
            <h2 class="section_title__text">
                <?= Html::encode($this->title) ?>
            </h2>
        </div><!-- end section_title -->

        <div class="contacts_content__form">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'input-text', 'placeholder' => 'Имя'])->label(false) ?>
                <?= $form->field($model, 'password')->passwordInput(['class' => 'input-text', 'placeholder' => 'Пароль'])->label(false) ?>

                <div class="form-group">
                    <?= Html::submitButton('Вход', ['class' => 'btn btn-dark form_btn', 'name' => 'login-button']) ?>
                </div>

                <div class="hidden_els">
                    <?= $form->field($model, 'rememberMe')->checkbox() ?>
                    <div style="color:#999;margin:1em 0">
                        If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                        <br>
                        Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                    </div>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
