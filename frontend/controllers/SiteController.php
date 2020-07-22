<?php
namespace frontend\controllers;

use common\models\document\Section;
use common\models\offer\Offer;
use Yii;
use yii\web\Controller;
use devskyfly\yiiModuleAuthSecurity\actions\LoginAction;
use devskyfly\yiiModuleAuthSecurity\actions\LogoutAction;
use frontend\models\UserRequest;
use common\models\order\Order;
use yii\filters\AccessControl;
use yii\helpers\Html;
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

    public function behaviors()
    {
        //if (YII_ENV_PROD) {
            return [
                'access' => [
                    'class' => AccessControl::className(),
                    'rules' => [
                        // разрешаем аутентифицированным пользователям
                         // allow authenticated users
                        [
                            'actions' => ['index', 'error', 'login'],
                            'allow' => true,
                            'roles' => ['?'],
                        ],
                        
                        [
                            //'actions' => ['index', 'error', 'login'],
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                        // всё остальное по умолчанию запрещено
                    ],
                ],
            ];
        // }   else {
        //     return false;
        // }
    }

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
        $model = new UserRequest();

        if ($model->load(Yii::$app->request->post()) 
            && $model->validate()) {
            $order = new Order();
            $order->active = 'N';
            $order->user = Yii::$app->user->id;
            $order->txt = Html::encode($model->content);
            $order->saveLikeItem();
            return $this->render('user-answer', ['type' => 'order']);
        }
        
        return $this->render('user-request-form',['model' => $model, 'type' => 'order']);
    }


    public function actionOffer()
    {
        $this->view->title = 'Предложения';

        $model = new UserRequest();

        if ($model->load(Yii::$app->request->post()) 
            && $model->validate()) {
            $order = new Offer();
            $order->active = 'N';
            $order->user = Yii::$app->user->id;
            $order->txt = Html::encode($model->content);
            $order->saveLikeItem();
            return $this->render('user-answer', ['type' => 'offer']);
        }
        
        return $this->render('user-request-form',['model' => $model, 'type' => 'offer']);
    }
}
