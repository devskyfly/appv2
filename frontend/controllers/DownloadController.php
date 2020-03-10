<?php
namespace frontend\controllers;
use common\models\document\FileExtension;
use devskyfly\yiiModuleAdminPanel\controllers\contentPanel\AbstractFileTransferController;
use yii\filters\AccessControl;

class DownloadController extends AbstractFileTransferController
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

    public function fileClass()
    {
        return FileExtension::class;
    }

    public function actionIndex($guid)
    {
        return $this->sendFileByGuid($guid, null);
    }
}