<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

?>
<div class="raw">
    <div class="col-xs-12">
    <?
    NavBar::begin(['brandLabel' => 'ГСК "Дегунино"']);
    echo Nav::widget([
        'items' => [
            [
                'label' => 'Правление',
                'items' => [
                        ['label' => 'Состав', 'url' => '#'],
                        ['label' => 'Протоколы', 'url' => '#']             
                ],
            ],
            [
                'label' => 'Инфо',
                'items' => [
                    ['label' => 'Новости', 'url' => '#'],                   
                    ['label' => 'Документы', 'url' => '#'],
                    ['label' => 'Отчетность', 'url' => '#'],
                ],
            ],
            [
                'label' => 'Обратная связь',
                'items' => [
                    ['label' => 'Заявление', 'url' => '#'],                   
                    ['label' => 'Предложение', 'url' => '#']
                ],
            ],
            /*['label' => 'Рев. ком.', 'url' => ['/site/commission']],*/
            ['label' => 'Реквизиты', 'url' => ['/site/requisites']],
            
            ['label' => 'Форум', 'url' => '#'],
            [
                'label' => 'Login',
                'url' => ['site/login'],
                'visible' => Yii::$app->user->isGuest
            ],
        ],
        'options' => ['class' => 'navbar-nav'],
    ]);
    NavBar::end();
    
    ?>
    </div>
</div>