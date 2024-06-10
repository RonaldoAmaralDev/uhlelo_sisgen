<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartaoCreditoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartao_credito', function (Blueprint $table) {
            $table->id('cod_cartao_credito');
            $table->unsignedBigInteger('cod_banco')->nullable();
            $table->unsignedBigInteger('cod_bandeira_cartao')->nullable();
            $table->integer('final_cartao')->nullable();
            $table->string('validade', 5)->nullable();
            $table->timestamps();

            $table->foreign('cod_banco')->references('id')->on('bancos');
            $table->foreign('cod_bandeira_cartao')->references('id')->on('bandeira_cartao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cartao_credito');
    }
}
