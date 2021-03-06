<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
?>
<? 
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="hasJs NoTouch HasDragDrop">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css" type="text/css" charset="utf-8" />
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<?
$controller = Yii::$app->controller;
$contrId = $controller->id;
$actionId = $controller->action->id;
if($contrId == "site" && $actionId == "index"){
    $background = true;
} else {
    $background = false;
}
?>
<?if($background):?>
    <body style='background-image: url("/img/background.jpg?v1"); background-repeat: no-repeat; background-size: 100% 100%;'>
<?else:?>
    <body>
<?endif?>
<?php $this->beginBody() ?>

    <?= $this->render('_header')?>
    <div class = "container" style='min-height: calc(100vh - 80px);'>
    <?= $content ?>
    </div>
    <?= $this->render('_footer')?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
