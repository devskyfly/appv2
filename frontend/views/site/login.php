<?php
use devskyfly\yiiModuleAuthSecurity\widgets\auth\LoginForm;
?>
<div class="raw">
    <div class="col-xs-12">
        <?=LoginForm::widget(compact("loginForm"));?>
    </div>
</div>