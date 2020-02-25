<?php
namespace frontend\controllers;
use common\models\document\FileExtension;
use devskyfly\yiiModuleAdminPanel\controllers\contentPanel\AbstractFileTransferController;

class DownloadController extends AbstractFileTransferController
{
    public function fileClass()
    {
        return FileExtension::class;
    }

    public function actionIndex($guid)
    {
        return $this->sendFileByGuid($guid, null);
    }
}