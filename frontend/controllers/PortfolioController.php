<?php


namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\repositories\ProjectRepository;

class PortfolioController extends Controller
{
    public $layout = 'portfolio';

    public function actionIndex()
    {
        $projects = ProjectRepository::getAllActive();

        return $this->render('index', compact('projects'));
    }
}