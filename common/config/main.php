<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    
    'bootstrap' => [
        'admin-panel',
        'auth-security'
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'user' => [
            'class' => 'yii\web\User',
            'identityClass' => 'common\models\user\CustomUser',
            'loginUrl' => ['/site/login'],
            'authTimeout' => 3600*24*365
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
        'admin-panel'=>[
            'class'=>'devskyfly\yiiModuleAdminPanel\Module',
            'upload_dir'=>'@common/upload'
        ],
        'auth-security' => [
            "class" => "devskyfly\yiiModuleAuthSecurity\Module",
            "loginTitle" => "Login page",
            "loginKeywords" => "Login keywords",
            "loginDescription" => "Login description"
        ]
    ]
];
