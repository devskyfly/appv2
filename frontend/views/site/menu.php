<?

use yii\bootstrap\Html;
use yii\helpers\Url;

?>
<div class="col-xs-12 col-md-4">
        
            <div class="">
                <h2 style="color: white; text-align: center;">Общие положения</h2>
            </div>
            
            <div class=""> 
                <div class="btn" style="width:100%;">
                        <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-list-alt", "style"=>"margin-right:5px"])?>
                        <?=Html::a("{$span}Устав", Url::toRoute(['/download/index', 'guid'=>'2a49687c-c1f4-4c70-9336-12892b039e89']), ["style"=>"color: white;font-size:20px;text-decoration: underline;"]);?>
                </div>
            </div>

            <div class="" style="margin-top:5px">
                <div class="btn" style="width:100%;">
                    <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-wrench", "style"=>"margin-right:5px"])?>
                    <?=Html::a("{$span}Режим работы", ['site/worktime'], ["style"=>"color: white;font-size:20px;text-decoration: underline;"]);?>
                </div>
            </div>

            <div class="" style="margin-top:5px">
                <div class="btn" style="width:100%;">
                    <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-user", "style"=>"margin-right:5px"])?>
                    <?=Html::a("{$span}Состав ГСК", ['site/users'], ["style"=>"color: white;font-size:20px;text-decoration: underline;"]);?>
                </div>
            </div>
        
            <div class="" style="margin-top:5px">
                <div class="btn " style="width:100%;">
                    <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-tasks", "style"=>"margin-right:5px"])?>
                    <?=Html::a("{$span}Правила внутреннего распорядка", 
                    Url::toRoute(['/download/index', 'guid'=>'c48d8b7f-b1ad-4cd3-abec-001d16972a51']), ["style"=>"color: white;font-size:20px;text-decoration: underline;"]);?>
                </div>
            </div>

            <div class="" style="margin-top:5px">
                <div class="btn " style="width:100%;">
                    <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-tasks", "style"=>"margin-right:5px"])?>
                    <?=Html::a("{$span}Договор аренды земли", 
                    Url::toRoute(['/download/index', 'guid'=>'93f2b1b5-34ba-4f0f-964f-d1b4bc9eedee']), ["style"=>"color: white;font-size:20px;text-decoration: underline;"]);?>
                </div>
            </div>

            <div class="" style="margin-top:5px">
                <div class="btn " style="width:100%;">
                    <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-tasks", "style"=>"margin-right:5px"])?>
                    <?=Html::a("{$span}Уставные документы", 
                    Url::toRoute(['/download/index', 'guid'=>'43b647b3-be93-4c14-a2e0-a134324deae4']), ["style"=>"color: white;font-size:20px;text-decoration: underline;"]);?>
                </div>
            </div>

            <div class="" style="margin-top:5px">
                <div class="btn " style="width:100%;">
                    <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-tasks", "style"=>"margin-right:5px"])?>
                    <?=Html::a("{$span}Госкомстат", 
                    Url::toRoute(['/download/index', 'guid'=>'048832b8-4d14-4c1a-a704-227a623553b8']), ["style"=>"color: white;font-size:20px;text-decoration: underline;"]);?>
                </div>
            </div>
    </div>
    <div class="col-xs-12 col-md-4">
        
        <div> 
            <h2 style="color: white; text-align: center;">Деятельность ГСК</h2>
        </div>

        <div class="" style="margin-top:5px">
            <div class="btn " style="width:100%;">
                <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-download", "style"=>"margin-right:5px"])?>
                <?=Html::a("{$span}Входящие письма", Url::toRoute(['/documents/index', 'section' => 11]), ["style"=>"color: white;font-size:20px;text-decoration: underline;"]);?>
            </div>
        </div>

        <div class="" style="margin-top:5px">
            <div class="btn " style="width:100%;">
                <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-upload", "style"=>"margin-right:5px"])?>
                <?=Html::a("{$span}Исходящие письма", Url::toRoute(['/documents/index', 'section' => 12]), ["style"=>"color: white;font-size:20px;text-decoration: underline;"]);?>
            </div>
        </div>

        <div class="" style="margin-top:5px">
            <div class="btn " style="width:100%;">
                <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-rub", "style"=>"margin-right:5px"])?>
                <?=Html::a("{$span}Протоколы правления", Url::toRoute(['/documents/index', 'section' => 1]), ["style"=>"color: white;font-size:20px;text-decoration: underline;"]);?>
            </div>
        </div>

        <div class="" style="margin-top:5px">
            <div class="btn " style="width:100%;">
                <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-list-alt", "style"=>"margin-right:5px"])?>
                <?=Html::a("{$span}Штатное расписание", Url::toRoute(['/download/index', 'guid'=>'a8b4d609-6c29-4650-9336-fd103d0a6a81']), ["style"=>"color: white;font-size:20px;text-decoration: underline;"]);?>
            </div>
        </div>

        <div class="" style="margin-top:5px">
            <div class="btn " style="width:100%;">
                <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-rub", "style"=>"margin-right:5px"])?>
                <?=Html::a("{$span}Смета", Url::toRoute(['/documents/index', 'section' => 7]), ["style"=>"color: white;font-size:20px;text-decoration: underline;"]);?>
            </div>
        </div>

        <div class="" style="margin-top:5px"> 
            <div class="btn" style="width:100%;">
                <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-list-alt", "style"=>"margin-right:5px"])?>
                <?=Html::a("{$span}Новости", Url::toRoute(['/news/index']), ["style"=>"color: white;font-size:20px;text-decoration: underline;"]);?>
            </div>
        </div>
    
        <div class="" style="margin-top:5px">
            <div class="btn " style="width:100%;">
                <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-eye-open", "style"=>"margin-right:5px"])?>
                <?=Html::a("{$span}Ревизионная комиссия", Url::toRoute(['/site/revision']), ["style"=>"color: white;font-size:20px;text-decoration: underline;"]);?>
            </div>
        </div>
    
        <div class="" style="margin-top:5px">
            <div class="btn" style="width:100%;">
                <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-comment", "style"=>"margin-right:5px"])?>
                <?=Html::a("{$span}Общие собрания", Url::toRoute(['/documents/index', 'section' => 6]), ["style"=>"color: white;font-size:20px;text-decoration: underline;"]);?>
            </div>
        </div>
</div>
<div class="col-xs-12 col-md-4">
    
        <div class="">
            <h2 style="color: white; text-align: center;">Бухгалтерия</h2>
        </div>
        
        <div class="" style="margin-top:5px">
            <div class="btn " style="width:100%;">
                <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-alert", "style"=>"margin-right:5px"])?>
                <?=Html::a("{$span}Ревизия бухгалтерии", Url::toRoute(['/download/index', 'guid'=>'3a013429-9d50-409d-82c6-d974a8d50a05']), ["style"=>"color: white;font-size:20px;text-decoration: underline;"]);?>
            </div>
        </div>

        <div class="" style="margin-top:5px">
            <div class="btn " style="width:100%;">
                <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-rub", "style"=>"margin-right:5px"])?>
                <?=Html::a("{$span}Платежи", Url::toRoute(['/download/index', 'guid'=>'e269335c-47fb-4c5e-9e89-67e9bef47ab1']), ["style"=>"color: white;font-size:20px;text-decoration: underline;"]);?>
            </div>
        </div>

        <div class="" style="margin-top:5px">
            <div class="btn " style="width:100%;">
                <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-user", "style"=>"margin-right:5px"])?>
                <?=Html::a("{$span}Должники", Url::toRoute(['#']), ["style"=>"color: white;font-size:20px;text-decoration: underline;"]);?>
            </div>
        </div>
        
        <div class="" style="margin-top:5px">
            <div class="btn " style="width:100%;">
                <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-rub", "style"=>"margin-right:5px"])?>
                <?=Html::a("{$span}Операции по счету", 
                Url::toRoute(['/documents/index', 'section' => 14]), ["style"=>"color: white;font-size:20px;text-decoration: underline;"]);?>
            </div>
        </div>
        
        <div class="" style="margin-top:5px">
            <div class="btn " style="width:100%;">
                <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-rub", "style"=>"margin-right:5px"])?>
                <?=Html::a("{$span}Расходы", 
                Url::toRoute(['/documents/index', 'section' => 13]), ["style"=>"color: white;font-size:20px;text-decoration: underline;"]);?>
            </div>
        </div>

        <div class="" style="margin-top:5px">
            <div class="btn " style="width:100%;">
                <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-rub", "style"=>"margin-right:5px"])?>
                <?=Html::a("{$span}САП", Url::toRoute(['/download/index', 'guid'=>'7560e63a-a0ef-4468-abe9-2ebb65425f05']), ["style"=>"color: white;font-size:20px;text-decoration: underline;"]);?>
            </div>
        </div>
    
        <div class="" style="margin-top:5px">
            <div class="btn" style="width:100%;">
                <?$span = Html::tag('span','',["class" => "glyphicon glyphicon-list-alt", "style"=>"margin-right:5px"])?>
                <?=Html::a("{$span}Договора с обслуживающими организациями", Url::toRoute(['/documents/index', 'section' => 2]), ["style"=>"color: white;font-size:20px;text-decoration: underline;"]);?>
            </div>
        </div>
</div>