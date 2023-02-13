<?php

use yii\db\Migration;

/**
 * Class m230213_161525_gallerey
 */
class m230213_161525_gallerey extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('gallerey', [
            'id' => $this->primaryKey(),
            'img' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230213_161525_gallerey cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230213_161525_gallerey cannot be reverted.\n";

        return false;
    }
    */
}
