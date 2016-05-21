<?php

use yii\db\Migration;

/**
 * Handles the creation for table `user_educationprofiletable`.
 */
class m160516_120006_create_user_educationProfileTable extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user_educationprofiletable', [
            'id' => $this->primaryKey(),
        	'userId' => $this->integer()->notNull(),
        	'fromDate' => $this->date()->notNull(),
        	'tillDate' => $this->date()->notNull(),
        	'educationProfile' => $this->string(1024),	
        ]);
        
        $this->addForeignKey('fk-user_educationProfile-user', 'user_educationprofiletable', 'userId', 'user', 'id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user_educationprofiletable');
    }
}
