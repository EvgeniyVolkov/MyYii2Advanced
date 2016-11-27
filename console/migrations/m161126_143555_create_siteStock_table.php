<?php

use yii\db\Migration;

/**
 * Handles the creation of table `sitestock`.
 */
class m161126_143555_create_siteStock_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('siteStock', [
            'id' => $this->primaryKey(),
            'mainText' => $this->string(100), // основной текст
            'description' => $this->text(), // описание
            'link' => $this->string(), // ссылка
            'img' => $this->string(), // путь к картинке
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
