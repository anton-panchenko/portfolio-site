<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\ContactForm;
use frontend\models\repositories\ArticleRepository;
use frontend\models\repositories\ProjectRepository;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout = 'main';

        $contactForm = new ContactForm();
        $articles = ArticleRepository::getArticlesForMainPage();
        $projects = ProjectRepository::getForMainPage();

        if ($contactForm->load(Yii::$app->request->post()) && $contactForm->validate()) {

            $contactForm->sendEmail(Yii::$app->params['adminEmail']);

            return $this->refresh();
        }

        return $this->render('index', compact(
            'contactForm', 'articles', 'projects'
        ));
    }

}
