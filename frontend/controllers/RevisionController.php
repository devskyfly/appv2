<?php
namespace frontend\controllers;

use yii\web\Controller;

class RevisionController extends Controller
{
    public function actionIndex()
    {
        $this->view->title = 'Ревизионная комиссия';
        return $this->render('index',[]);
    }
}