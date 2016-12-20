<?php

use yii\db\Migration;

/**
 * Handles the creation of table `sitestock`.
 */
class m161218_170458_create_siteStock_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('siteStock', [
            'id' => $this->primaryKey(),
            'mainText' => $this->string(100)->notNull()->defaultValue(''), // основной текст
            'description' => $this->text(), // описание
            'link' => $this->string()->notNull()->defaultValue(''), // ссылка
            'img' => $this->string()->notNull()->defaultValue(''), // путь к картинке
            'createdAt' => $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'), // дата создания, по умолчанию текущее время
            'updatedAt' => $this->dateTime()->notNull() . ' DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP' // дата редактирования, по умолчанию текущее время
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('sitestock');
    }
}
