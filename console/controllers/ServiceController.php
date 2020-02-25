<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;
use yii\helpers\BaseConsole;

class ServiceController extends Controller
{
    public function actionIndex()
    {
        $db = Yii::$app->db;
        $schema = $db->getSchema();
        $tables = $schema->getTableNames();
        foreach ($tables as $table) {
            if ($table != 'migration') {
                BaseConsole::stdout($table.PHP_EOL);
                $db->createCommand()->truncateTable($table)->execute();
            }
        }
    }
}