<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use devskyfly\php56\types\Obj;
use yii\helpers\Html;
use yii\web\NotFoundHttpException;

$this->title = $name;
?>
<div class="raw">
    <div class="col-xs-12">
        <div class="site-error">
            <? if(Obj::isA($exception, NotFoundHttpException::class)): ?>
                <?
                $this->title = "Страница не найдена.";
                $message = "";
                ?>
            <?else:?>
                <?
                $this->title = "Ошибка.";
                $message = "На сайте произошла ошибка, но мы уже об этом знаем.";
                ?>
            <?endif;?>

            <h1><?= Html::encode($this->title) ?></h1>
            <? if($message): ?>
                <div class="alert alert-danger">
                    <?= nl2br(Html::encode($message)) ?>
                </div>
            <? endif; ?>
        </div>
    </div>
</div>
