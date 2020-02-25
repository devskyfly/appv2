<?php

use common\models\user\CustomUser;

?>

<?
$users = CustomUser::findAll(['status'=>CustomUser::STATUS_ACTIVE]);
?>
<div class="row">
    <div class="col-xs-12">
    <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Члены ГСК.</div>

    <table class="table">
        <tr>
            <th>№</th>
            <th>Бокс</th>
            <th>Ф.И.О</th>
        </tr>
        <?$i=0;?>
<?foreach ($users as $user):?>
        <tr>
            <td><?=++$i?></td>
            <td><?=$user->username?></td>
            <td><?=$user->extensions["UserInfo"]['name']?></td>
        </tr>
<?endforeach?>
    </table>