<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFerramentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ferramentas', function (Blueprint $table) {
            $table->id('cod_ferramenta');
            $table->unsignedBigInteger('cod_ferramenta_status');
            $table->unsignedBigInteger('cod_tp_ferramenta');
            $table->unsignedBigInteger('cod_item')->nullable();
            $table->unsignedBigInteger('cod_item_local');
            $table->unsignedBigInteger('cod_item_marca');
            $table->unsignedBigInteger('cod_aux')->nullable();
            $table->unsignedBigInteger('cod_unidade')->nullable();
            $table->string('ferramenta', 100);
            $table->integer('metrologia')->nullable();
            $table->integer('qte');
            $table->integer('qte_uso')->nullable();
            $table->dateTime('dt_cad')->nullable();
            $table->unsignedBigInteger('cod_sec_user')->nullable();
            $table->timestamps();

            $table->foreign('cod_ferramenta_status')->references('id')->on('ferramenta_status');
            $table->foreign('cod_tp_ferramenta')->references('id')->on('tp_ferramentas');
            // Adicione as chaves estrangeiras necessárias
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ferramentas');
    }
}