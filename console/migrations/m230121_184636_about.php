<?php

use yii\db\Migration;

/**
 * Class m230121_184636_about
 */
class m230121_184636_about extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('about', [
            'id' => $this->primaryKey(),
            'img' => $this->string()->notNull(),
            'tittle' => $this->string()->notNull(),
            'description' => $this->text()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230121_184636_about cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230121_184636_about cannot be reverted.\n";

        return false;
    }
    */
}
