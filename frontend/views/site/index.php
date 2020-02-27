<?php

/* @var $this yii\web\View */

use frontend\widgets\InfoList;
use yii\helpers\Html;
use yii\helpers\Url;

?>
<div class="raw">
    <div class="col-xs-12">
    <div class="alert alert-danger" role="alert">
        <h2>Объявление</h2>
        <div>Текст объвления</div>
    </div>
    </div>
</div>
<div class="raw">
    <div class="col-xs-12">
        <div class="">
        <h2>Притча</h2>
        <p>Китайская и умная или слайдер</p>
        </div>
    </div>
</div>
<div class="raw">
    <div class="col-xs-12 col-md-4">
        
            <div class="">
                <h3 style="color: rgb(51, 122, 183)">Общие положения</h3>
            </div>
            
            <div class=""> 
                <div class="btn btn-primary" style="width:100%">
                    <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-list-alt", "style"=>"margin-right:5px"])?>
                    <?=Html::a("{$span}Устав", Url::toRoute(['/download/index', 'guid'=>'2a49687c-c1f4-4c70-9336-12892b039e89']), ["style"=>"color: white"]);?>
                </div>
            </div>
        
            <div class="" style="margin-top:5px">
                <div class="btn btn-primary " style="width:100%">
                    <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-tasks", "style"=>"margin-right:5px"])?>
                    <?=Html::a("{$span}Правила внутреннего распорядка", 
                    Url::toRoute(['/download/index', 'guid'=>'c48d8b7f-b1ad-4cd3-abec-001d16972a51']), ["style"=>"color: white"]);?>
                </div>
            </div>
        
            <div class="" style="margin-top:5px">
                <div class="btn btn-primary" style="width:100%">
                    <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-wrench", "style"=>"margin-right:5px"])?>
                    <?=Html::a("{$span}Порядок работ", ['site/index'], ["style"=>"color: white"]);?>
                </div>
            </div>
    </div>
    <div class="col-xs-12 col-md-4">
        
        <div> 
            <h3 style="color: rgb(51, 122, 183)">Деятельность ГСК</h3>
        </div>
        
        <div class=""> 
            <div class="btn btn-primary" style="width:100%">
                <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-list-alt", "style"=>"margin-right:5px"])?>
                <?=Html::a("{$span}Хозяйственная деятельность", ['site/index'], ["style"=>"color: white"]);?>
            </div>
        </div>
    
        <div class="" style="margin-top:5px">
            <div class="btn btn-primary " style="width:100%">
                <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-eye-open", "style"=>"margin-right:5px"])?>
                <?=Html::a("{$span}Ревизионная комиссия", Url::toRoute(['/revision']), ["style"=>"color: white"]);?>
            </div>
        </div>
    
        <div class="" style="margin-top:5px">
            <div class="btn btn-primary" style="width:100%">
                <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-comment", "style"=>"margin-right:5px"])?>
                <?=Html::a("{$span}Общие собрания", Url::toRoute(['/documents/index', 'section' => 6]), ["style"=>"color: white"]);?>
            </div>
        </div>
</div>
<div class="col-xs-12 col-md-4">
    
        <div class="">
            <h3 style="color: rgb(51, 122, 183)">Бухгалтерия</h3>
        </div>
        
        <div class=""> 
            <div class="btn btn-primary" style="width:100%">
                <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-list-alt", "style"=>"margin-right:5px"])?>
                <?=Html::a("{$span}Банковские реквизиты", Url::toRoute(['/download/index', 'guid'=>'3d39ba11-15b4-4496-a32a-eee2a91efbd4']), ["style"=>"color: white"]);?>
            </div>
        </div>
    
        <div class="" style="margin-top:5px">
            <div class="btn btn-primary " style="width:100%">
                <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-rub", "style"=>"margin-right:5px"])?>
                <?=Html::a("{$span}Платежный баланс", Url::toRoute(['/download/index', 'guid'=>'e269335c-47fb-4c5e-9e89-67e9bef47ab1']), ["style"=>"color: white"]);?>
            </div>
        </div>
    
        <div class="" style="margin-top:5px">
            <div class="btn btn-primary" style="width:100%">
                <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-flash", "style"=>"margin-right:5px"])?>
                <?=Html::a("{$span}Договора с контрагентами", Url::toRoute(['/documents/index', 'section' => 2]), ["style"=>"color: white"]);?>
            </div>
        </div>
</div>
</div>
