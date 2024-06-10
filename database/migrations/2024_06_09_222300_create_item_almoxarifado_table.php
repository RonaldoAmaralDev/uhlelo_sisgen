<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemAlmoxarifadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_almoxarifado', function (Blueprint $table) {
            $table->id('cod_item_almoxarifado');
            $table->unsignedBigInteger('cod_item')->nullable();
            $table->unsignedBigInteger('cod_almoxarifado')->nullable();
            $table->decimal('qte', 10, 2)->nullable();
            $table->integer('qte_min')->nullable();
            $table->decimal('valor_custo', 10, 2)->nullable();
            $table->integer('transferido')->nullable();
            $table->unsignedBigInteger('cod_almoxarifado_2')->nullable();
            $table->datetime('dt_cad')->nullable();
            $table->unsignedBigInteger('cod_sec_user')->nullable();
            $table->timestamps();

            // Chaves estrangeiras
            $table->foreign('cod_item')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('cod_almoxarifado')->references('id')->on('almoxarifados')->onDelete('cascade');
            $table->foreign('cod_almoxarifado_2')->references('id')->on('almoxarifados')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_almoxarifado');
    }
}
