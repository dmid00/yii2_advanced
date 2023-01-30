<?php

use dektrium\user\models\User;
use yii\db\Migration;

/**
 * Class m230121_124313_add_admin_user
 */
class m230121_124313_add_admin_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('auth_item', [
            'name' => 'admin',
            'type' => 1,
            'description' => 'admin user',
            'created_at' => time(),
            'updated_at' => time(),
        ]);

        $admin = new User();
        $admin->username = 'admin';
        $admin->email = 'admin@test.test';
        $admin->password = 'admin12345678';

       if (!$admin->create()) {
            throw new \RuntimeException('Can\'t create admin user');
        }

        $this->insert('auth_assignment', [
            'item_name' => 'admin',
            'user_id' => $admin->id,
            'created_at' => time(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230121_124313_add_admin_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230121_124313_add_admin_user cannot be reverted.\n";

        return false;
    }
    */
}
