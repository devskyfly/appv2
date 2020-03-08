<?php

/* @var $this yii\web\View */

use frontend\widgets\InfoList;
use yii\helpers\Html;
use yii\helpers\Url;

?>
<?if (Yii::$app->user->isGuest) :?>
<div class="raw">
    <div class="col-xs-12">
        <div class="alert alert-danger" role="alert">
        <h2>Для доступа к материалам сайта необходимо <?=Html::a("авторизоваться", ["site/login"])?>!</h2>
        </div>
    </div>
</div>
<?endif;?>
<div class="raw">
    <div class="col-xs-12">
        <div class="well" role="alert">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">
                    <h3>2020-03-14 состоится общее собрание:</h3>
                </div>
                <!--<div class="panel-body">
                    <p>На повестке:</p>
                </div>-->
                <ul class="list-group">
                    <li class="list-group-item">Смета</li>
                    <li class="list-group-item">Снос</li>
                    <li class="list-group-item">Должники</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="raw">
    <?=$this->render('menu');?>
</div>
