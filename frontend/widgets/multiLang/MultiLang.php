<?php


namespace frontend\widgets\multiLang;

use yii\bootstrap\Widget;

class MultiLang extends Widget
{
    public function init(){}

    public function run() {

        return $this->render('multi-lang');

    }
}