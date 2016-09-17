<?php

use yii\db\Migration;

class m160910_072725_create_post extends Migration
{
    public function up()
    {
		$this->createTable('post',[
		'id'=>$this->primaryKey()
		]);
    }

    public function down()
    {
        echo "m160910_072725_create_post cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
