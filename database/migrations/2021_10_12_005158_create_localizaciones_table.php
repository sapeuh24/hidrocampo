<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalizacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localizaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('direccion');
            $table->unsignedBigInteger('id_ciudad');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_plan');
            
            $table->foreign('id_ciudad')->references('id')->on('ciudades');
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_plan')->references('id')->on('planes');
            
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('localizaciones');
    }
}
