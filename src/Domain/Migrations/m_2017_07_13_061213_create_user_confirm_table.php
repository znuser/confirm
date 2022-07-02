<?php

namespace Migrations;

use Illuminate\Database\Schema\Blueprint;
use ZnDatabase\Migration\Domain\Base\BaseCreateTableMigration;

class m_2017_07_13_061213_create_user_confirm_table extends BaseCreateTableMigration
{

    protected $tableName = 'user_confirm';
    protected $tableComment = 'Код активации';

    public function tableSchema()
    {
        return function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->comment('Идентификатор');
            $table->string('login')->comment('Логин');
            $table->string('action')->comment('Действие');
            $table->string('code')->comment('Секретный код');
            $table->boolean('is_activated')->comment('Активировано?');
            $table->text('data')->nullable()->comment('Данные');
            $table->integer('expire')->comment('Время истечения пригодности');
            $table->dateTime('created_at')->comment('Время создания');

            $table->unique(['login', 'action']);
        };
    }

}
