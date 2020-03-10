<?php

use devskyfly\yiiModuleAdminPanel\migrations\helpers\contentPanel\UnnamedEntityMigrationHelper;
use yii\db\sqlite\Schema;

/**
 * Class m200310_181417_create_table_offer
 */
class m200310_181417_create_table_offer extends UnnamedEntityMigrationHelper
{
    public $table = "offer";
    
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $fields = $this->getFieldsDefinition();
        $this->createTable($this->table, $fields);
        $this->addColumn($this->table, 'txt',  Schema::TYPE_TEXT);
        $this->addColumn($this->table, 'user', Schema::TYPE_INTEGER);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropTable($this->table);
    }
}
