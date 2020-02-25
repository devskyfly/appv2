<?php

use devskyfly\yiiModuleAdminPanel\migrations\helpers\contentPanel\PageMigrationHelper;
use yii\db\Migration;

/**
 * Class m200225_175029_page_extension_table
 */
class m200225_175029_page_extension_table extends PageMigrationHelper
{
    public $table = "page";
    
    public function safeUp()
    {
        $fields = $this->getFieldsDefinition();
        $this->createTable($this->table, $fields);
    }

    public function safeDown()
    {
        $this->dropTable($this->table);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200225_175029_page_extension_table cannot be reverted.\n";

        return false;
    }
    */
}
