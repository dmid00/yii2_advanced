<?php

use yii\db\Migration;

/**
 * Class m230121_184600_testmonial
 */
class m230121_184600_testmonial extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('testimonial', [
            'id' => $this->primaryKey(),
            'img' => $this->string()->notNull(),
            'name' => $this->string()->notNull(),
            'title' => $this->string()->notNull(),
            'description' => $this->text(),
            'status' => $this->string()->defaultValue(null)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230121_184600_testmonial cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230121_184600_testmonial cannot be reverted.\n";

        return false;
    }
    */
}
