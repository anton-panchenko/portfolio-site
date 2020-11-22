<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%project}}`.
 */
class m201122_171132_create_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%project}}', [
            'id' => $this->primaryKey(),
            'url' => $this->string(255)->defaultValue('#'),
            'title' => $this->string(),
            'description' => $this->text(),
            'image' => $this->string(),
            'filter_class'=>$this->string(),
            'status' => $this->integer()->defaultValue(1),
            'sort' => $this->integer()->defaultValue(50),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%project}}');
    }
}
