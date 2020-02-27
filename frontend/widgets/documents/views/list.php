
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
                <?$i=0;?>
                <?foreach ($list as $item):?>
                <?$i++;?>
                <tr>
                    <td><?=$i?></td>
                    <td><?=$item['date']?></td>
                    <td><?=$item['name']?></td>
                    <td>
                        <a href='<?=$item['url']?>'>
                            <span class="glyphicon glyphicon-list-alt">
                            </span>
                        </a>
                    </td>
                </tr>
                <?endforeach;?>
            </tbody>
    </table>
    </div> 
</div>