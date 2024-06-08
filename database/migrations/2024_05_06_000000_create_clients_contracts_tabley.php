<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes_contatos', function (Blueprint $table) {
            $table->id('cod_clientes_contatos');
            $table->unsignedBigInteger('cod_cliente');
            $table->unsignedBigInteger('cod_tp_contato')->nullable();
            $table->string('contato', 100)->nullable();
            $table->string('celular', 20);
            $table->string('email', 100)->nullable();
            $table->integer('principal')->nullable();
            $table->dateTime('dt_cad')->nullable();
            $table->unsignedBigInteger('cod_sec_user')->nullable();
            $table->timestamps();
        });

        Schema::table('clientes_contatos', function (Blueprint $table) {
            $table->foreign('cod_cliente')->references('id')->on('clientes');
            $table->foreign('cod_tp_contato')->references('id')->on('tipos_contato')->nullable();
            $table->foreign('cod_sec_user')->references('id')->on('users')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes_contatos');
    }
}