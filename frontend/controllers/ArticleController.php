<?php
namespace frontend\controllers;

use yii\web\Controller;
use devskyfly\yiiModuleAuthSecurity\actions\LoginAction;
use devskyfly\yiiModuleAuthSecurity\actions\LogoutAction;
use yii\web\ErrorAction;

/**
 * Site controller
 */
class ArticleController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => ErrorAction::class,
            ],
            'login' => [
                'class' => LoginAction::class
            ],
            'logout' => [
                'class' => LogoutAction::class
            ],
        ];
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionSobraniye()
    {
        $this->view->title = "Собрание";
        return $this->render('sobraniye');
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionSnos()
    {
        $this->view->title = "Снос";
        return $this->render('snos');
    }    
}
