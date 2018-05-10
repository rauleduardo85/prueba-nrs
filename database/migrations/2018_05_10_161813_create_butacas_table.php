<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatebutacasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('butacas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fila')->unique();
            $table->integer('columna')->unique();
            $table->string('observacion');
            $table->integer('disponible');
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
        Schema::drop('butacas');
    }
}
