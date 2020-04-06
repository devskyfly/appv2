<?php

/* @var $this yii\web\View */


use yii\helpers\Url;

?>

<div class="raw">
    <div class="col-xs-12  col-md-6">
        <div class="well">
            <div style="background-color: white;padding: 20px;">
                <a href = "<?=Url::toRoute(["/article/sobraniye"])?>" style="color: gray; text-decoration: underline;">
                    <h3 style="text-align: center;">Общее собрание 2020-03-14</h3>
                </a>
            </div>
        </div>
    </div>
    <div class="col-xs-12  col-md-6">
        <div class="well">
            <div style="background-color: white;padding: 20px;">
                <a href = "<?=Url::toRoute(["/article/snos"])?>" style="color: gray; text-decoration: underline;">
                    <h3 style="text-align: center;">Снос</h3>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="raw">
    <?=$this->render('menu');?>
</div>
