<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdressesTable extends Migration
{
    /**
     * Запуск миграци. Добавление к модели адрессов строковых свойств NAME, CITY, AREA, STREET, HOUSE
     * и текстового свойства INFORMATION
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->id();
            $table->string('NAME');
            $table->string('CITY');
            $table->string('AREA');
            $table->string('STREET');
            $table->string('HOUSE');
            $table->text('INFORMATION');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adresses');
    }
}
