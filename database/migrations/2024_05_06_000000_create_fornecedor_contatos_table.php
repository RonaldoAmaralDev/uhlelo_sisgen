<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedorContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedor_contatos', function (Blueprint $table) {
            $table->id('cod_fornecedor_contatos');
            $table->unsignedBigInteger('cod_fornecedor');
            $table->string('celular', 20)->nullable(false);
            $table->string('contato', 100)->nullable();
            $table->timestamps();
        });

        Schema::table('fornecedor_contatos', function (Blueprint $table) {
            $table->foreign('cod_fornecedor')->references('id')->on('fornecedores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fornecedor_contatos');
    }
}