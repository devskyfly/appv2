<?php

use devskyfly\yiiModuleAdminPanel\migrations\helpers\contentPanel\EntityMigrationHelper;

/**
 * Class m200225_175012_news_table
 */
class m200225_175012_news_table extends EntityMigrationHelper
{
    public $table = "news";
    
    public function safeUp()
    {
        $fields = $this->getFieldsDefinition();
        $this->createTable($this->table, $fields);
    }

    
    public function safeDown()
    {
        $this->drop($this->table);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200225_175012_news_table cannot be reverted.\n";

        return false;
    }
    */
}
