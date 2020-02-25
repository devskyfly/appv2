<?php
namespace common\models\news;

use devskyfly\yiiModuleAdminPanel\models\contentPanel\AbstractItemExtension;

class PageExtension extends AbstractItemExtension
{
    protected static function itemCls()
    {
        return News::class;
    }

    public static function tableName()
    {
        return "page";
    }
}