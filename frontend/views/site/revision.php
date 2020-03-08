<?php
use frontend\widgets\documents\Lst;
?>
<div class="row">
    <div class="col-xs-12">
    <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Ревизионная комиссия</div>

    <!-- Table -->
    <table class="table">
        <tr>
            <th>№</th>
            <th>Ф.И.О</th>
            <th>Бокс</th>
            
        </tr>
        <tr>
            <td>1</td>
            <td>Плавинский Алексей Альбертович</td>
            <td>бокс 50, стр.1</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Мордовина Татьяна Ивановна</td>
            <td>гараж 105, стр.3</td>
        </tr>
    </table>
    </div>
    </div>
</div>

<?=Lst::widget(['section' => $section])?>