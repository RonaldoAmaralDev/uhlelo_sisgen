<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFerramentaCaixaItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ferramenta_caixa_item', function (Blueprint $table) {
            $table->id('cod_ferramenta_caixa_item');
            $table->unsignedBigInteger('cod_ferramenta_caixa')->nullable();
            $table->unsignedBigInteger('cod_ferramenta')->nullable();
            $table->integer('qte')->nullable();
            $table->dateTime('dt_cad')->nullable();
            $table->unsignedBigInteger('cod_sec_user')->nullable();
            $table->timestamps();

            $table->foreign('cod_ferramenta_caixa')->references('id')->on('ferramenta_caixa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ferramenta_caixa_item');
    }
}