<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Регистрация';

?>
<div class="site-signup auth_view">

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
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'input-text', 'placeholder' => 'Имя'])->label(false) ?>
                <?= $form->field($model, 'email')->textInput(['class' => 'input-text', 'placeholder' => 'Email'])->label(false) ?>
                <?= $form->field($model, 'password')->passwordInput(['class' => 'input-text', 'placeholder' => 'Пароль'])->label(false) ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-dark form_btn', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>

    </div>
</div>
