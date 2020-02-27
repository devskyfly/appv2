<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;

?>

<?
$nav_items = [];


$nav_items[] = [
        'label' => 'Правление',
        'items' => [
                ['label' => 'Состав', 'url' => Url::toRoute(['/managers/index'])],
                ['label' => 'Протоколы', 'url' => Url::toRoute(['/documents/index', 'section' => 1])],            
        ],
    ];
    $nav_items[] =
    [
        'label' => 'Инфо',
        'items' => [
            ['label' => 'Акты проверки ревизионной комисси', 'url' => Url::toRoute(['/documents/index', 'section' => 5])],              
            ['label' => 'Бухгалтерия', 'url' => Url::toRoute(['/documents/index', 'section' => 9])],  
            ['label' => 'Трудовые документы', 'url' => Url::toRoute(['/documents/index', 'section' => 8])],
            ['label' => 'Договора с контрагентами', 'url' => Url::toRoute(['/documents/index', 'section' => 2])],
            ['label' => 'Смета', 'url' => Url::toRoute(['/documents/index', 'section' => 7])],   
            
            ['label' => 'Протоколы собраний', 'url' => Url::toRoute(['/documents/index', 'section' => 6])],
            
        ],
    ];
    if (!Yii::$app->user->isGuest) {
        $nav_items[] = ['label' => 'Состав ГСК', 'url' => Url::toRoute(['site/users'])];
    }
    $nav_items[] =[
        'label' => 'Обратная связь',
        'items' => [
            ['label' => 'Заявление', 'url' => '#'],                   
            ['label' => 'Предложение', 'url' => '#']
        ],
    ];
    /*['label' => 'Рев. ком.', 'url' => ['/site/commission']],*/
    $nav_items[] = [
        'label' => 'Документы ГСК',
        'items' => [
            [
                'label' => 'Уставные документы', 
                'url' => Url::toRoute(['/download/index', 'guid'=>'43b647b3-be93-4c14-a2e0-a134324deae4'])
            ], 
            [
                'label' => 'Договор аренды земли', 
                'url' => Url::toRoute(['/download/index', 'guid'=>'93f2b1b5-34ba-4f0f-964f-d1b4bc9eedee'])
            ], 
            [
                'label' => 'Госкомстат', 
                'url' => Url::toRoute(['/download/index', 'guid'=>'048832b8-4d14-4c1a-a704-227a623553b8'])
            ],  
        ]
    ];
    
if (Yii::$app->user->isGuest) {
    $nav_items[] = [
        'label' => 'Войти',
        'url' => ['site/login'],
        'visible' => Yii::$app->user->isGuest
    ];
}

if (!Yii::$app->user->isGuest) {
    $nav_items[] =    [
        'label' => 'Выйти '.($username?'('.$username.')':''),
        'url' => ['site/logout'],
    ];
}
?>

<div class="raw">
    <div class="col-xs-12">
    <?
    if (Yii::$app->user->identity) {
        $username = Yii::$app->user->identity->username;
    } else {
        $username = "";
    }
    
    NavBar::begin(['brandLabel' => 'ГСК "Дегунино"']);
    echo Nav::widget([
        'items' => $nav_items,
        'options' => ['class' => 'navbar-nav'],
    ]);
    NavBar::end();
    ?>
    </div>
</div>