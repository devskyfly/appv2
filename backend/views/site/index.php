<?php

/* @var $this yii\web\View */

use devskyfly\yiiModuleAdminPanel\widgets\common\NavigationMenu;
use devskyfly\yiiModuleAuthSecurity\Module;

$this->title = '';
?>
<?
$list = [
    [
        'label' => 'Навигация', 
        'sub_list' => [
            ['name' => 'Пользователи', 'route' => '/user'],
            ['name' => 'Новости', 'route' => '/news'],
            ['name' => 'Документы', 'route' => '/documents'],
            ['name' => 'Обращения', 'route' => '/orders'],
            ['name' => 'Предложения', 'route' => '/offers']
        ]
    ]
];
?>
<div class="row">
    <?=NavigationMenu::widget(['list' => $list])?>
</div>
