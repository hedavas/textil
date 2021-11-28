<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelaTable1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tela', function (Blueprint $table) {
            $table->increments('id');
            $table->text('item');

            $table->unsignedInteger('ancho_id')->nullable();
            $table->foreign('ancho_id')->references('id')->on('ancho');

            $table->unsignedInteger('umedida_id')->nullable();
            $table->foreign('umedida_id')->references('id')->on('umedida');

            $table->unsignedInteger('sucursal_id')->nullable();
            $table->foreign('sucursal_id')->references('id')->on('sucursal');

            $table->unsignedInteger('calidad_id')->nullable();
            $table->foreign('calidad_id')->references('id')->on('calidad');

            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('user');

            $table->Integer('costo_unitario');
            
            $table->Integer('status');

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
        Schema::dropIfExists('tela');
    }
}
