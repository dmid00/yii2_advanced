<?php

use yii\db\Migration;

/**
 * Class m230121_184652_ourfruit
 */
class m230121_184652_ourfruit extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ourfruit', [
            'id' => $this->primaryKey(),
            'img' => $this->string()->notNull(),
            'name' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230121_184652_ourfruit cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230121_184652_ourfruit cannot be reverted.\n";

        return false;
    }
    */
}
