<?php
namespace common\models\news;

use devskyfly\yiiModuleAdminPanel\models\contentPanel\AbstractEntity;

class News extends AbstractEntity
{
    public static function sectionCls()
    {
        return Section::class;
    }
    
    public function extensions()
    {
        return [
            'page' => PageExtension::class
        ];
    }

    public function binders(){
        return [];
        /*return [
            'EntityToSubEntityBinder'=>EntityToSubEntityBinder::class,
        ];*/
    }
    
    public static function selectListRoute()
    {
        return "/news/section-select-list";
    }
}
?>