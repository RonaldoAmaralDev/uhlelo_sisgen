<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedorContasBancariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedor_contas_bancarias', function (Blueprint $table) {
            $table->id('cod_fornecedor_contas_bancarias');
            $table->unsignedBigInteger('cod_fornecedor')->nullable();
            $table->unsignedBigInteger('cod_banco')->nullable();
            $table->string('tipo', 1)->nullable();
            $table->unsignedBigInteger('cod_tp_chave_pix')->nullable();
            $table->string('agencia', 10)->nullable();
            $table->string('agencia_dv', 3)->nullable();
            $table->string('conta', 20)->nullable();
            $table->string('conta_dv', 3)->nullable();
            $table->string('favorecido', 30)->nullable();
            $table->string('cpf', 20)->nullable();
            $table->string('chavepix', 50)->nullable()->comment('chave aleatória');
            $table->string('chavepix_telefone', 20)->nullable();
            $table->string('chavepix_email', 50)->nullable();
            $table->integer('principal')->nullable();
            $table->timestamps();
        });

        Schema::table('fornecedor_contas_bancarias', function (Blueprint $table) {
            $table->foreign('cod_fornecedor')->references('id')->on('fornecedores')->onDelete('cascade');
            $table->foreign('cod_banco')->references('id')->on('bancos')->onDelete('set null');
            $table->foreign('cod_tp_chave_pix')->references('id')->on('tipos_chave_pix')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fornecedor_contas_bancarias');
    }
}