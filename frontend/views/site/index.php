<?php

/* @var $this yii\web\View */

use frontend\widgets\InfoList;
use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="raw">
    <div class="col-xs-12">
        <div class="well" role="alert">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">
                    <h3>Общее собрание 2020-03-14</h3>
                </div>
                <div class="panel-body">
                    <p>Тема общего собрания</p>
                </div>
                <ul class="list-group">
                    <li class="list-group-item"><span class="glyphicon glyphicon-flash"></span>Снос</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="raw">
    <?=$this->render('menu');?>
</div>
