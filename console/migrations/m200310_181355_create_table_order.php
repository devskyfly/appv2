<?php

use devskyfly\yiiModuleAdminPanel\migrations\helpers\contentPanel\UnnamedEntityMigrationHelper;
use yii\db\Migration;
use yii\db\mysql\Schema;

/**
 * Class m200310_181355_create_table_order
 */
class m200310_181355_create_table_order extends UnnamedEntityMigrationHelper
{
    public $table = "order";

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

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200310_181355_create_table_order cannot be reverted.\n";

        return false;
    }
    */
}
