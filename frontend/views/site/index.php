<?php

/* @var $this yii\web\View */

use frontend\widgets\InfoList;
use yii\helpers\Html;
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
    <div class="col-xs-4">
        
            <div class="">
                <h3 style="color: rgb(51, 122, 183)">Общие положения</h3>
            </div>
            
            <div class=""> 
                <div class="btn btn-primary" style="width:100%">
                    <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-list-alt", "style"=>"margin-right:5px"])?>
                    <?=Html::a("{$span}Устав", '/docs/Устав.pdf', ["style"=>"color: white"]);?>
                </div>
            </div>
        
            <div class="" style="margin-top:5px">
                <div class="btn btn-primary " style="width:100%">
                    <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-tasks", "style"=>"margin-right:5px"])?>
                    <?=Html::a("{$span}Правила внутреннего распорядка", '/docs/Правила внутреннего распорядка на территории ГСК Дегунино.docx', ["style"=>"color: white"]);?>
                </div>
            </div>
        
            <div class="" style="margin-top:5px">
                <div class="btn btn-primary" style="width:100%">
                    <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-wrench", "style"=>"margin-right:5px"])?>
                    <?=Html::a("{$span}Порядок работ", ['site/index'], ["style"=>"color: white"]);?>
                </div>
            </div>
    </div>
    <div class="col-xs-4">
        
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
                <?=Html::a("{$span}Ревизионная комиссия", '/docs/Ревизионная комиссия.docx', ["style"=>"color: white"]);?>
            </div>
        </div>
    
        <div class="" style="margin-top:5px">
            <div class="btn btn-primary" style="width:100%">
                <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-comment", "style"=>"margin-right:5px"])?>
                <?=Html::a("{$span}Общие собрания", ['site/index'], ["style"=>"color: white"]);?>
            </div>
        </div>
</div>
<div class="col-xs-4">
    
        <div class="">
            <h3 style="color: rgb(51, 122, 183)">Прочее</h3>
        </div>
        
        <div class=""> 
            <div class="btn btn-primary" style="width:100%">
                <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-list-alt", "style"=>"margin-right:5px"])?>
                <?=Html::a("{$span}Реквизиты", ['site/index'], ["style"=>"color: white"]);?>
            </div>
        </div>
    
        <div class="" style="margin-top:5px">
            <div class="btn btn-primary " style="width:100%">
                <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-rub", "style"=>"margin-right:5px"])?>
                <?=Html::a("{$span}Должники", ['site/index'], ["style"=>"color: white"]);?>
            </div>
        </div>
    
        <div class="" style="margin-top:5px">
            <div class="btn btn-primary" style="width:100%">
                <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-flash", "style"=>"margin-right:5px"])?>
                <?=Html::a("{$span}Энергоснабжающие организации", ['site/index'], ["style"=>"color: white"]);?>
            </div>
        </div>
</div>
</div>
<div class="raw">
<?
$title = "Новости";
$route = "news";
$list = [
    ["date"=>"2019-10-30", "name"=>"Презентация сайта", "route"=>["news/detail", 'id'=>4]],
    ["date"=>"2019-10-01", "name"=>"Октябрьская революция", "route"=>["news/detail", 'id'=>3]],
    ["date"=>"2019-09-08", "name"=>"День выборов", "route"=>["news/detail", 'id'=>2]],
    ["date"=>"2019-01-01", "name"=>"Новогодние праздники", "route"=>["news/detail", 'id'=>1]]
];
?>
<?=InfoList::widget(compact("title", "route", "list"));?>

<?
$title = "Документы";
$route = "docs";
$list = [
    ["date"=>"2019-10-30", "name"=>"Приказ об отмене податей", "route"=>["docs/detail", 'id'=>4]],
    ["date"=>"2019-10-01", "name"=>"Доровог по оказанию услуг клинига", "route"=>["docs/detail", 'id'=>3]],
    ["date"=>"2019-09-08", "name"=>"Дороговор МосЭнерго", "route"=>["docs/detail", 'id'=>2]],
    ["date"=>"2019-01-01", "name"=>"Договор аренды", "route"=>["docs/detail", 'id'=>1]]
];
?>
<?=InfoList::widget(compact("title", "route", "list"));?>

<?
$title = "Отчетность";
$route = "report";
$list = [
    ["date"=>"2019-10-30", "name"=>"Отчет за 4-й квартал 2019", "route"=>["report/detail", 'id'=>4]],
    ["date"=>"2019-10-01", "name"=>"Отчет за 3-й квартал 2019", "route"=>["report/detail", 'id'=>3]],
    ["date"=>"2019-09-08", "name"=>"Отчет за 2-й квартал 2019", "route"=>["report/detail", 'id'=>2]],
    ["date"=>"2019-01-01", "name"=>"Отчет за 1-й квартал 2019", "route"=>["report/detail", 'id'=>1]]
];
?>
<?=InfoList::widget(compact("title", "route", "list"));?>
</div>