<?php
namespace backend\controllers;

use common\models\document\Document;
use common\models\document\DocumentFilter;
use common\models\document\Section;
use devskyfly\php56\types\Obj;
use devskyfly\yiiModuleAdminPanel\controllers\contentPanel\AbstractContentPanelController;
use devskyfly\yiiModuleAdminPanel\widgets\contentPanel\FileUpload;
use devskyfly\yiiModuleAdminPanel\widgets\contentPanel\ItemSelector;

class DocumentsController extends AbstractContentPanelController 
{
/**
     * 
     * {@inheritDoc}
     * @see \devskyfly\yiiModuleAdminPanel\controllers\contentPanel\AbstractContentPanelController::sectionItem()
     */
    public static function sectionCls()
    {
    	 //Если иерархичность не требуется, то вместо названия класса можно передать null
        return Section::class;
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \devskyfly\yiiModuleAdminPanel\controllers\contentPanel\AbstractContentPanelController::entityItem()
     */
    public static function entityCls()
    {
        return Document::class;
    }
    
    /**
     * @return \devskyfly\yiiModuleAdminPanel\models\contentPanel\AbstractItem | null
     */
    public static function entityFilterCls()
    {
        return DocumentFilter::class;
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \devskyfly\yiiModuleAdminPanel\controllers\contentPanel\AbstractContentPanelController::entityEditorViews()
     */
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
                    .FileUpload::widget([
                            "form"=>$form,
                            "item"=>$item,
                            "attribute"=>'file'
                        ])
                    .$item['extensions']['file']['guid']
                ],
            ];
        };
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \devskyfly\yiiModuleAdminPanel\controllers\contentPanel\AbstractContentPanelController::sectionEditorItems()
     */
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
    
    /**
     * 
     * {@inheritDoc}
     * @see \devskyfly\yiiModuleAdminPanel\controllers\contentPanel\AbstractContentPanelController::itemLabel()
     */
    public function itemLabel()
    {
        return "Документ";
    }
}
?>