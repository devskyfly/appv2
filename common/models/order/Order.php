<?php
namespace common\models\order;

use devskyfly\yiiModuleAdminPanel\models\contentPanel\AbstractUnnamedEntity;

class Order extends AbstractUnnamedEntity
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