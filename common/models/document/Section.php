<?php
namespace common\models\document;

use devskyfly\yiiModuleAdminPanel\models\contentPanel\AbstractSection;

class Section extends AbstractSection
{
    /**
     * 
     * {@inheritDoc}
     * @see \devskyfly\yiiModuleContentPanel\models\contentPanel\AbstractSection::entity()
     */
    public static function entityCls()
    {
        return Document::class;
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
           
        ];
    }
   

    /**
     * {@inheritdoc}
     * @see devskyfly\yiiModuleAdminPanel\models\contentPanel\AbstractItem::selectListRoute()
     * Здесь прописывается роут к списку выбора
     */
    public static function selectListRoute()
    {
        return "documents/entity-with-section/section-select-list";
    }
}