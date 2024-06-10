<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmoxarifadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almoxarifados', function (Blueprint $table) {
            $table->id('cod_almoxarifado');
            $table->unsignedBigInteger('cod_unidade')->nullable();
            $table->string('almoxarifado', 100)->nullable();
            $table->timestamps();

            $table->foreign('cod_unidade')->references('id')->on('unidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('almoxarifados');
    }
}
