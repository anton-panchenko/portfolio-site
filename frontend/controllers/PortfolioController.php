<?php


namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class PortfolioController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}