<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<h2>Заявление</h2>
<? $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'content')->textarea() ?>
<div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
</div>
<? ActiveForm::end(); ?>