<?php

use devskyfly\yiiModuleAdminPanel\migrations\helpers\contentPanel\SectionMigrationHelper;

/**
 * Class m200211_124756_create_table_section
 */
class m200211_124756_create_table_section extends SectionMigrationHelper
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $fields = $this->getFieldsDefinition();
        $this->createTable("section", $fields);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->drop("section");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200211_124756_create_table_section cannot be reverted.\n";

        return false;
    }
    */
}
