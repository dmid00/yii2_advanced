<?php

use yii\db\Migration;

/**
 * Class m230202_155100_catrgory
 */
class m230202_155100_catrgory extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'url' => $this->string(),
        ]);

        $this->insert('category', [
            'name' => 'Home',
            'url' => 'https://t.me/',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230202_155100_catrgory cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230202_155100_catrgory cannot be reverted.\n";

        return false;
    }
    */
}
