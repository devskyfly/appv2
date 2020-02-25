<?php
namespace frontend\controllers;

use yii\web\Controller;

class ManagersController extends Controller
{
    public function actionIndex()
    {
        $this->view->title = 'Состав правления';
        return $this->render('index',[]);
    }

    public function actionProtocols()
    {
        $this->view->title = 'Протоколы';
        $this->render('protocols',[]);
    }
}