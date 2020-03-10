<?php
namespace backend\controllers;

use common\models\offer\Offer;
use common\models\offer\OfferFilter;
use common\models\user\CustomUser;
use devskyfly\yiiModuleAdminPanel\controllers\contentPanel\AbstractContentPanelController;


class OffersController extends AbstractContentPanelController 
{
    public static function sectionCls()
    {
    	 //Если иерархичность не требуется, то вместо названия класса можно передать null
        return null;
    }
    
    public static function entityCls()
    {
        return Offer::class;
    }
    
    public static function entityFilterCls()
    {
        return OfferFilter::class;
    }
    
    public function entityEditorViews()
    {
        return function($form,$item)
        {
            $user = null;
            $user_html = '';
            if (!$item->isNewRecord) {
                $user = CustomUser::find()->where(['id' => $item->user])->one();
                $user->username;
                $user_html = '<div class="well">'.$user->username.'</div>';
            }

            return [
                [
                    "label"=>"main",
                    "content"=>
                    $form->field($item, 'create_date_time')
                    .$form->field($item, 'change_date_time')
                    .$form->field($item, 'active')
                        ->checkbox(['value'=>'Y','uncheck'=>'N','checked' => $item->active == 'Y'?true:false])
                    .$user_html
                    .$form->field($item, 'txt')
                    ->textarea(['rows' => 5])
                    ],
                
            ];
        };
    }
    
    public function sectionEditorViews()
    {
        return function($form,$item)
        {
            
        };
    }
    
    public function itemLabel()
    {
        return "Предложения";
    }
}
?>