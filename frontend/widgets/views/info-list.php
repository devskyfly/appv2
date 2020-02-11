<?php

/* @var $this yii\web\View */
/* @var $route */
/* @var $title string */
/* @var $list array */

use yii\helpers\Html;
use yii\helpers\Url;

?>
<div class="col-xs-4">
    <div>
        <?=Html::a("<h3>{$title}</h3>",Url::toRoute($route))?>
    </div>
    <div>
        <ul class="list-group">
            <?foreach($list as $item):?>
            <li class="list-group-item"><?=$item['date']?>: <?=Html::a($item['name'],Url::toRoute($route))?></li>
            <?endforeach;?>
        </ul>
    </div>
</div>
