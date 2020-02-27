<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;

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
        'items' => [
            [
                'label' => 'Правление',
                'items' => [
                        ['label' => 'Состав', 'url' => Url::toRoute(['managers/index'])],
                        ['label' => 'Протоколы', 'url' => Url::toRoute(['managers/protocols'])]             
                ],
            ],
            [
                'label' => 'Инфо',
                'items' => [
                    ['label' => 'Новости', 'url' => Url::toRoute(['news/index'])],                   
                    ['label' => 'Документы', 'url' => Url::toRoute(['documents/index'])],
                    ['label' => 'Отчетность', 'url' => Url::toRoute(['documents/index'])],
                ],
            ],
            ['label' => 'Состав ГСК', 'url' => Url::toRoute(['site/users'])],
            [
                'label' => 'Обратная связь',
                'items' => [
                    ['label' => 'Заявление', 'url' => '#'],                   
                    ['label' => 'Предложение', 'url' => '#']
                ],
            ],
            /*['label' => 'Рев. ком.', 'url' => ['/site/commission']],*/
            ['label' => 'Реквизиты', 'url' => '/docs/ЕГРЮЛ.pdf'],
            
            ['label' => 'Форум', 'url' => '#'],
            [
                'label' => 'Войти',
                'url' => ['site/login'],
                'visible' => Yii::$app->user->isGuest
            ],
            [
                'label' => 'Выйти '.($username?'('.$username.')':''),
                'url' => ['site/logout'],
                'visible' => !Yii::$app->user->isGuest
            ],
        ],
        'options' => ['class' => 'navbar-nav'],
    ]);
    NavBar::end();
    ?>
    </div>
</div>