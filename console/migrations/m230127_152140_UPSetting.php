<?php

use yii\db\Migration;

/**
 * Class m230127_152140_UPSetting
 */
class m230127_152140_UPSetting extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('UPSetting', [
            'id' => $this->primaryKey(),
            'namesite' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'location' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'sendEmail' => $this->string()->notNull(),
            'sendPassEmail' => $this->string()->notNull(),
            'locationUrl' => $this->string()->notNull(),
            'selection1' => $this->string()->notNull(),
            'selection2' => $this->string()->notNull(),
            'selection3' => $this->string()->notNull(),
            'selection4' => $this->string()->notNull(),
            'selection5' => $this->string()->notNull(),
        ]);

        $this->insert('UPSetting', [
            'namesite' => 'TestSite',
            'email' => 'admin@teh.support',
            'location' => 'Ru, Shadrinsk',
            'phone' => '+79080044004',
            'sendEmail' => 'email@send.ru',
            'sendPassEmail' => 'passToEmail',
            'locationUrl' => '<iframe=URL>',
            'selection1' => 'Fruit shop',
            'selection2' => 'Fresh Fruit',
            'selection3' => 'Our Fruit',
            'selection4' => 'What Syas Cutomer',
            'selection5' => 'Request A call back',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230127_152140_UPSetting cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230127_152140_UPSetting cannot be reverted.\n";

        return false;
    }
    */
}
