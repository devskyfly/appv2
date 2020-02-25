<?php
namespace backend\controllers;

use common\models\news\News;
use common\models\news\NewsFilter;
use common\models\news\Section;
use devskyfly\php56\types\Obj;
use devskyfly\yiiModuleAdminPanel\controllers\contentPanel\AbstractContentPanelController;
use devskyfly\yiiModuleAdminPanel\widgets\contentPanel\ItemSelector;

class NewsController extends AbstractContentPanelController 
{
    public static function sectionCls()
    {
    	 //Если иерархичность не требуется, то вместо названия класса можно передать null
        return Section::class;
    }
    
    public static function entityCls()
    {
        return News::class;
    }
    
    public static function entityFilterCls()
    {
        return NewsFilter::class;
    }
    
    public function entityEditorViews()
    {
        return function($form,$item)
        {
            return [
                [
                    "label"=>"main",
                    "content"=>
                    $form->field($item,'name')
                    .ItemSelector::widget([
                        "form"=>$form,
                        "master_item"=>$item,
                        "slave_item_cls"=>$item::sectionCls(),
                        "property"=>"_section__id"
                    ])
                    .$form->field($item, 'create_date_time')
                    .$form->field($item, 'change_date_time')
                    .$form->field($item, 'active')
                        ->checkbox(['value'=>'Y','uncheck'=>'N','checked' => $item->active == 'Y'?true:false])
                ],
                [
                    "label" => "seo",
                    "content" => $form->field($item->extensions['page'], 'title')
                    .$form->field($item->extensions['page'], 'keywords')
                    .$form->field($item->extensions['page'], 'description')
                    .$form->field($item->extensions['page'], 'preview_text')
                    .$form->field($item->extensions['page'], 'detail_text')->textarea(['rows' => 10])
                ]
            ];
        };
    }
    
    public function sectionEditorViews()
    {
        return function($form,$item)
        {
            
             return [
                [
                    "label"=>"main",
                    "content"=>
                    $form->field($item,'name')
                    .ItemSelector::widget([
                        "form"=>$form,
                        "master_item"=>$item,
                        "slave_item_cls"=>Obj::getClassName($item),
                        "property"=>"__id"
                    ])
                    .$form->field($item,'create_date_time')
                    .$form->field($item,'change_date_time')
                    .$form->field($item,'active')->checkbox(['value'=>'Y','uncheck'=>'N','checked'=>$item->active=='Y'?true:false])
                    
                ],
               
            ];
        };
    }
    
    public function itemLabel()
    {
        return "Новости";
    }
}
?>