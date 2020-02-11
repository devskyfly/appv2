<?php

use devskyfly\yiiModuleAdminPanel\migrations\helpers\contentPanel\EntityMigrationHelper;

/**
 * Class m200211_124532_create_table_docs
 */
class m200211_124532_create_table_document extends EntityMigrationHelper
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $fields = $this->getFieldsDefinition();
        $this->createTable("document", $fields);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->drop("document");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200211_124532_create_table_docs cannot be reverted.\n";

        return false;
    }
    */
}
