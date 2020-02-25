<?php
namespace common\models\document;

use devskyfly\yiiModuleAdminPanel\models\contentPanel\AbstractEntity;

class Document extends AbstractEntity
{
    /**
     * 
     * {@inheritDoc}
     * @see \devskyfly\yiiModuleContentPanel\models\contentPanel\AbstractSection::section()
     */
    public static function sectionCls()
    {
    	 //Если иерархичность не требуется, то вместо названия класса можно передать null
        return Section::class;
    }
    
    /**
     *
     * {@inheritDoc}
     * @see \devskyfly\yiiModuleContentPanel\models\contentPanel\AbstractItem::extensions()
     */
    public function extensions()
    {
    	 //Если расширений нет, то можно вернуть пустой массив
        return [
            'file' => FileExtension::class
        ];
    }
    
    /**
     * {@inheritdoc}
     * @see devskyfly\yiiModuleAdminPanel\models\contentPanel\AbstractItem::selectListRoute()
     * Здесь прописывается роут к списку выбора
     */
    public static function selectListRoute()
    {
        return "contentPanel/entity-with-section/section-select-list";
    }

}