<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;

?>

<?
$nav_items = [];


    $nav_items[] = [
        'label' => 'Правление',
        'url' => Url::toRoute(['/managers/index'])
    ];
    $nav_items[] = [
        'label' => 'Оплата',
        'url' => '/imgs/rekvizity-dlya-oplaty.jpg'
    ];
    $nav_items[] = [
        'label' => 'Контакты',
        'url' => Url::toRoute(['/site/contacts'])
    ];
    $nav_items[] =
    [
        'label' => 'Письма',
        'items' => [
            ['label' => 'Входящие', 'url' => Url::toRoute(['/documents/index', 'section' => 11])],
            ['label' => 'Исходящие', 'url' => Url::toRoute(['/documents/index', 'section' => 12])]
        ],
    ];
    
    $nav_items[] =[
        'label' => 'Обратная связь',
        'items' => [
            ['label' => 'Заявление', 'url' => Url::toRoute(['/site/order'])],                   
            ['label' => 'Предложение', 'url' => Url::toRoute(['/site/offer'])]
        ],
    ];
if (Yii::$app->user->isGuest) {
    $nav_items[] = 
    [
        'label' => 'Войти',
        'url' => ['site/login'],
        'visible' => Yii::$app->user->isGuest
    ];
}

if (!Yii::$app->user->isGuest) {
    $nav_items[] =    [
        'label' => 'Выйти ('.Yii::$app->user->identity->username.')',
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