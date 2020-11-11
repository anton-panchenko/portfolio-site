<?php

namespace frontend\widgets\navMenu;

use yii\base\Widget;

class NavMenu extends Widget
{
    public $cssClass;
    public $idName;

    public function init(){}

    public function run() {

        return $this->render('nav-menu', [
            'cssClass' => $this->cssClass,
            'idName' => $this->idName,
        ]);

    }
}