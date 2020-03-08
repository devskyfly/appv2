<?php

/* @var $this yii\web\View */

use yii\widgets\Breadcrumbs;

?>

<div class="raw">
    <div class="col-xs-12">
    <?=Breadcrumbs::widget([
        'itemTemplate' => "<li><i>{link}</i></li>\n",
        'links' => [
            [
                'label' => 'Новости',
                'url' => ['info/news', 'id' => 10]
            ],
    ]]);?>
    </div> 
</div>

<div class="raw">
    <div class="col-xs-12">
    <table class="table table-striped">
            <tbody>
                <tr>
                    <th>
                        №
                    </th>
                    <th>
                        Дата
                    </th>
                    <th>
                        Название
                    </th>
                    <th>
                        Скачать
                    </th>
                </tr>
                <?for ($i=1;$i<=20;$i++):?>
                <tr>
                    <td><?=$i?></td>
                    <td>2019-09-<?=$i?></td>
                    <td><?="Документ №".$i?></td>
                    <td><span class="glyphicon glyphicon-list-alt"></span></td>
                </tr>
                <?endfor;?>
            </tbody>
    </table>
    </div> 
</div>