<?php

use yii\db\Migration;

/**
 * Class m200630_170420_table_person
 */
class m200630_170420_table_person extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('person', [
            'id' => $this->primaryKey(),
            'name' => $this->text()->notNull(),
            'birthdate' => $this->date(),
            'active' => $this->boolean(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('person');
    }

}
