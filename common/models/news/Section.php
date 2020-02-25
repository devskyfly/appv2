<?php
namespace common\models\news;

use devskyfly\yiiModuleAdminPanel\models\contentPanel\AbstractSection;

class Section extends AbstractSection
{
    public static function entityCls()
    {
        return News::class;
    }
    
    public function extensions()
    {
    	//Если расширений нет, то можно вернуть пустой массив
        return [
           
        ];
    }
   
    public static function selectListRoute()
    {
        return "news/entity-with-section/section-select-list";
    }
}