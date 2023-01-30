<?php

use yii\db\Migration;

/**
 * Class m230127_155429_navbar
 */
class m230127_155429_navbar extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('navbar', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'url' => $this->string(),
        ]);

        $this->insert('navbar', [
            'name' => 'Home',
            'url' => 'https://t.me/',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230127_155429_navbar cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230127_155429_navbar cannot be reverted.\n";

        return false;
    }
    */
}
