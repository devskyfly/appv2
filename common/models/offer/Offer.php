<?php
namespace common\models\offer;

use devskyfly\yiiModuleAdminPanel\models\contentPanel\AbstractUnnamedEntity;

class Offer extends AbstractUnnamedEntity
{
    public static function sectionCls()
    {
        return null;
    }
    
    public function extensions()
    {
        return [
            
        ];
    }

    public function binders(){
        return [];
    }
}
?>