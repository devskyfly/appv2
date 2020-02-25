<?php
namespace backend\controllers;

use common\models\user\UserFilter;
use devskyfly\php56\core\Cls;
use devskyfly\yiiModuleAdminPanel\controllers\contentPanel\AbstractContentPanelController;
use devskyfly\yiiModuleAuthSecurity\Module;
use Exception;
use Yii;

class UserController extends AbstractContentPanelController
{
        
    /**
     *
     * {@inheritDoc}
     * @see \devskyfly\yiiModuleAdminPanel\controllers\AbstractContentPanelController::sectionItem()
     */
    public static function sectionCls()
    {
        //Если иерархичность не требуется, товместо названия класса можно передать null
        return null;
    }
    
    /**
     *
     * {@inheritDoc}
     * @see \devskyfly\yiiModuleAdminPanel\controllers\AbstractContentPanelController::entityItem()
     */
    public static function entityCls()
    {
        return Yii::$app->user->identityClass;
    }
    
    public static function entityFilterCls()
    {
        return UserFilter::class;
    }
    
    /**
     *
     * {@inheritDoc}
     * @see \devskyfly\yiiModuleAdminPanel\controllers\AbstractContentPanelController::entityEditorViews()
     */
    public function entityEditorViews()
    {
        return function($form, $item)
        {
            $module = Module::getInstance();
            $optViewClb = $module->optEntityViewClb;
            return [
                [
                    "label" => "main",
                    "content" =>
                    $form->field($item, 'username')->textInput(['readonly'=> true])
                    .$form->field($item['extensions']['UserInfo'], 'name')
                    .$form->field($item, 'create_date_time')
                    .$form->field($item, 'change_date_time')
                    .$form->field($item, 'active')->checkbox(['value'=>'Y', 'uncheckValue'=>'N', 'checked' => $item->active == 'Y'?true:false])
                    .$optViewClb($form, $item)
                ],
            ];
        };
    }
    
    /**
     *
     * {@inheritDoc}
     * @see \devskyfly\yiiModuleAdminPanel\controllers\AbstractContentPanelController::sectionEditorItems()
     */
    public function sectionEditorViews()
    {
        return null;
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \devskyfly\yiiModuleAdminPanel\controllers\contentPanel\AbstractContentPanelController::entityCustomColumns()
     */
    public function entityCustomColumns()
    {
        return ['username'];
    }

    
    /**
     *
     * {@inheritDoc}
     * @see \devskyfly\yiiModuleAdminPanel\controllers\AbstractContentPanelController::itemLabel()
     */
    public function itemLabel()
    {
        return "Список пользователей";
    }
}
?>