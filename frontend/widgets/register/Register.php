<?php

namespace frontend\widgets\register;

use yii\bootstrap\Widget;

class Register extends Widget
{
    public function init(){}

    public function run() {

        return $this->render('register');

    }
}