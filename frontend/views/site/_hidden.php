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