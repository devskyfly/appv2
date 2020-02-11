<?php

use devskyfly\yiiModuleAdminPanel\migrations\helpers\contentPanel\FileMigrationHelper;
use yii\db\Migration;

/**
 * Class m200211_131314_create_table_files
 */
class m200211_131314_create_table_files extends FileMigrationHelper
{
    public $table = "file";

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $fields=$this->getFieldsDefinition();
        $this->createTable($this->table, $fields);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181029_145310_init_file_table cannot be reverted.\n";
        $this->dropTable($this->table);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200211_131314_create_table_files cannot be reverted.\n";

        return false;
    }
    */
}
