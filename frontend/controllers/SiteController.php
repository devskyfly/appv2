<?php
namespace frontend\controllers;

use common\models\document\Section;
use Yii;
use yii\web\Controller;
use devskyfly\yiiModuleAuthSecurity\actions\LoginAction;
use devskyfly\yiiModuleAuthSecurity\actions\LogoutAction;
use frontend\models\Order;
use yii\web\ErrorAction;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    /*public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }*/

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
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $this->view->title = "ГСК Дегунино";
        return $this->render('index');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionUsers()
    {
        return $this->render('users');
    }

    public function actionRevision()
    {
        $this->view->title = 'Ревизионная комиссия';

        $section = Section::find()->where(['active' => 'Y', 'id' => 5])->one();
        if (is_null($section)) {
            throw new NotFoundHttpException();
        }
        $this->view->title = $section->name;

        return $this->render('revision',['section' => $section->id]);
    }

    public function actionWorktime()
    {
        $this->view->title = 'Режим работы';
        return $this->render('worktime',[]);
    }

    public function actionContacts()
    {
        $this->view->title = 'Контакты';
        return $this->render('contacts',[]);
    }

    public function actionOrder()
    {
        $this->view->title = 'Заявления';
        $model = new Order();

        if ($model->load(Yii::$app->request->post()) 
            && $model->validate()) {
        } else {

        }
        
        return $this->render('order',['model' => $model]);
    }

    public function actionOffer()
    {
        $this->view->title = 'Предложения';
        return $this->render('order',[]);
    }
}
