<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemAlmoxarifadoLotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_almoxarifado_lotes', function (Blueprint $table) {
            $table->id('cod_item_almoxarifado_lote');
            $table->unsignedBigInteger('cod_item_almoxarifado')->nullable();
            $table->unsignedBigInteger('cod_tp_movimentacao')->nullable();
            $table->unsignedBigInteger('cod_item')->nullable();
            $table->string('tipo', 1)->nullable();
            $table->string('numero', 10)->nullable();
            $table->string('dot', 10)->nullable();
            $table->dateTime('dt_ultima_reforma')->nullable();
            $table->integer('numero_reforma')->default(0);
            $table->string('numero_antigo', 11)->nullable();
            $table->string('motivo', 100)->nullable();
            $table->dateTime('dt_alteracao_numero')->nullable();
            $table->unsignedBigInteger('cod_sec_user_alteracao')->nullable();
            $table->dateTime('dt_cad')->nullable();
            $table->unsignedBigInteger('cod_sec_user')->nullable();
            $table->timestamps();

            // Chaves estrangeiras
            $table->foreign('cod_item_almoxarifado')->references('id')->on('item_almoxarifado')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_almoxarifado_lotes');
    }
}
