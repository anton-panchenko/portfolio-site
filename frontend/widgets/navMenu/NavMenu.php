<?php

namespace frontend\widgets\navMenu;

use yii\base\Widget;

class NavMenu extends Widget
{
    public $location;
    public $cssClass;
    public $idName;

    public function init(){}

    public function run() {

        return $this->render('nav-menu', [
            'location' => $this->location,
            'cssClass' => $this->cssClass,
            'idName' => $this->idName,
        ]);

    }
}