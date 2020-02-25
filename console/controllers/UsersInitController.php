<?php
namespace console\controllers;

use Yii;
use common\models\user\CustomUser;
use yii\console\Controller;
use yii\helpers\BaseConsole;
use devskyfly\yiiModuleAuthSecurity\components\UserManager;
use Hackzilla\PasswordGenerator\Generator\ComputerPasswordGenerator;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class UsersInitController extends Controller
{
    public function actionIndex()
    {

        $generator = new ComputerPasswordGenerator();

        $generator
        ->setUppercase()
        ->setLowercase()
        ->setNumbers()
        ->setSymbols(false)
        ->setLength(12);
        
        $data = [
            ["file" => "1_1-2.xls", "range" => [5, 114]],
            ["file" => "1_3.xls", "range" => [5, 56]],
            ["file" => "2-4.xls", "range" => [5, 233]],
        ];

        $wrspreadsheet = new Spreadsheet();
        $wrsheet = $wrspreadsheet->getActiveSheet();
        $j = 0;
        foreach ($data as $item) {
            $usersDir = Yii::getAlias('@app/../../linked_files/users');
            $inputFileName = realpath($usersDir.'/'.$item["file"]);
            
            BaseConsole::stdout($inputFileName.PHP_EOL);
            $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);
            $array = $spreadsheet->getActiveSheet()->toArray();
            
            $i = 0;
            foreach ($array as $row) {

                $password = ($generator->generatePasswords(1))[0];

                $i++;
                
                $nmb = $row[0];
                $name = $row[1];
                
                if (($i >= $item['range'][0]) && ($i <= $item['range'][1])) {
                    $j++;
                    $username = 'box-'.$nmb;
                    $email = 'box-'.$nmb.'@gsk.com';

                    BaseConsole::stdout("{$nmb} - {$name} - {$password}".PHP_EOL);
                    $user = new CustomUser();
                    $user->active = 'Y';
                    $user->username = $username;
                    $user->email = $email;

                    $opt = [
                        "UserInfo" => ["name" => empty($name)?"---":$name]
                    ];

                    UserManager::add($user, $password, $opt);
                    $wrsheet->setCellValue('A'.$j, $username);
                    $wrsheet->setCellValue('B'.$j, $password);
                }
            }
        }
        $writer = new Xlsx($wrspreadsheet);
        $writer->save($usersDir.'/users_list.xlsx');
    }

    
    public function actionClear()
    {
        $db = Yii::$app->db;
        $schema = $db->getSchema();
        $db->createCommand()->truncateTable('user')->execute();
        $db->createCommand()->truncateTable('user_info')->execute();
        $db->createCommand()->truncateTable('auth_security_user')->execute();
    }
}