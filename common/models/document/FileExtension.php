<?php
namespace common\models\document;

use devskyfly\yiiModuleAdminPanel\models\contentPanel\AbstractFile;

class FileExtension extends AbstractFile
{
    public static function itemCls()
    {
        return Document::class;
    }

    public static function tableName()
    {
        return 'file';
    }
}