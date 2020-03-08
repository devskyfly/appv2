<?php
namespace common\models\document;

use devskyfly\yiiModuleAdminPanel\models\contentPanel\AbstractEntity;
use yii\helpers\ArrayHelper;

class Document extends AbstractEntity
{
    public $file;
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
        return "/documents/section-select-list";
    }

    public function rules()
    {
        $rules = parent::rules();

        $new_rules = [
            [['file'], 'file', 'skipOnEmpty'=>true, 'extensions'=>'jpg, jpeg, pdf, xls, xlsx, doc, docx, zip, rar']
        ];
        
        $rules = ArrayHelper::merge($rules, $new_rules);
        return $rules;
    }

}