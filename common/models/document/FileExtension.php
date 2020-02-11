<?php
namespace common\models\document;

use devskyfly\yiiModuleAdminPanel\models\contentPanel\AbstractItemExtension;

class FileExtension extends AbstractItemExtension
{
    public static function itemCls()
    {
        return Document::class;
    }
}