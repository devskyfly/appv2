<?php
namespace frontend\controllers;

use common\models\document\Section;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class DocumentsController extends Controller
{
    public function behaviors()
    {
        if (YII_ENV_PROD) {
            return [
                'access' => [
                    'class' => AccessControl::className(),
                    'rules' => [
                        // разрешаем аутентифицированным пользователям
                        [
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                        // всё остальное по умолчанию запрещено
                    ],
                ],
            ];
        }   else {
            return false;
        }
    }
    
    public function actionIndex($section)
    {
        $section = Section::find()->where(['active' => 'Y', 'id' => $section])->one();
        if (is_null($section)) {
            throw new NotFoundHttpException();
        }
        $this->view->title = $section->name;
        return $this->render('index',['section' => $section]);
    }
}