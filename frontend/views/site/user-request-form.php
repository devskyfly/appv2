<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<? if($type == "order"):?>
<h2>Заявление</h2>
<? endif;?>
<? if($type == "offer"):?>
<h2>Предложение</h2>
<? endif;?>
<? $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'content')->textarea() ?>
<div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
</div>
<? ActiveForm::end(); ?>