<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;
use yii\helpers\BaseConsole;

class ServiceController extends Controller
{
    public function actionIndex()
    {
        $exclude = ['user_info', 'user', 'auth_security_user', 'migration'];
        $db = Yii::$app->db;
        $schema = $db->getSchema();
        $tables = $schema->getTableNames();
        foreach ($tables as $table) {
            if ($table != in_array($table, $exclude)) {
                BaseConsole::stdout($table.PHP_EOL);
                $db->createCommand()->truncateTable($table)->execute();
            }
        }
    }
}