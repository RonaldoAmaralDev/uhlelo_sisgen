<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemEntradaTable extends Migration
{
    public function up()
    {
        Schema::create('item_entrada', function (Blueprint $table) {
            $table->increments('cod_item_entrada');
            $table->integer('cod_entrada')->unsigned();
            $table->integer('cod_item_estoque')->unsigned();
            $table->integer('qte');
            $table->double('valor', 10, 2);
            $table->double('total', 10, 2);
            $table->date('dt_cad');
            $table->timestamps();

            $table->foreign('cod_entrada')
                ->references('cod_entrada')->on('entrada')
                ->onDelete('cascade');

            $table->index(['cod_entrada', 'cod_item_estoque']);
            $table->index('cod_entrada');
        });
    }

    public function down()
    {
        Schema::dropIfExists('item_entrada');
    }
}
