<?php

/* @var $this yii\web\View */


use yii\helpers\Url;

?>

<div class="raw">
    <div class="col-xs-12  col-md-6">
        <div class="well" style ="background-image: url('/img/alert.jpg?v1'); background-size: cover">
            <div style="background-color: white;padding: 20px;">
                <a href = "<?=Url::toRoute(["/article/sobraniye"])?>" style="color: gray; text-decoration: underline;">
                    <h3 style="text-align: center; color: #ff7200; text-decoration-color: #ff7200;">Собрание после снятия самоизоляции</h3>
                </a>
            </div>
        </div>
    </div>
    <div class="col-xs-12  col-md-6">
        <div class="well" style ="background-image: url('/img/alert.jpg?v1'); background-size: cover">
            <div style="background-color: white;padding: 20px;">
                <a href = "<?=Url::toRoute(["/article/snos"])?>" style="color: gray; text-decoration: underline;">
                    <h3 style="text-align: center; color: #ff7200; text-decoration-color: #ff7200;">Снос</h3>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="raw">
    <?=$this->render('menu');?>
</div>
