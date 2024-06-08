<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id('cod_fornecedor');
            $table->unsignedBigInteger('cod_cidade');
            $table->unsignedBigInteger('cod_estado');
            $table->string('fornecedor', 100)->nullable(false);
            $table->string('nome_fantasia', 100)->nullable();
            $table->string('situacao', 100)->nullable();
            $table->string('motivo_situacao', 100)->nullable();
            $table->string('ramo_atividade', 255)->nullable();
            $table->string('cpf_cnpj', 20)->nullable()->unique();
            $table->char('endereco', 100)->nullable();
            $table->string('comp', 100)->nullable();
            $table->string('bairro', 50)->nullable();
            $table->integer('num')->nullable();
            $table->char('cep', 12)->nullable();
            $table->string('contato', 100)->nullable();
            $table->char('tel', 20)->nullable();
            $table->char('cel', 20)->nullable();
            $table->char('email', 100)->nullable();
            $table->string('site', 100)->nullable();
            $table->date('dt_cadastro')->nullable();
            $table->tinyInteger('ativo')->nullable();
            $table->tinyInteger('motorista')->nullable()->default(0);
            $table->string('foto_cnh', 100)->nullable();
            $table->string('tipo_cnh', 2)->nullable();
            $table->string('num_cnh', 30)->nullable();
            $table->date('val_cnh')->nullable();
            $table->unsignedBigInteger('metrologia')->nullable();
            $table->unsignedBigInteger('abastecimento')->nullable();
            $table->unsignedBigInteger('contribuinte_icms')->nullable();
            $table->unsignedBigInteger('bloqueado')->nullable();
            $table->timestamps();
        });

        Schema::table('fornecedores', function (Blueprint $table) {
            $table->foreign('cod_cidade')->references('id')->on('cidades')->onDelete('cascade');
            $table->foreign('cod_estado')->references('id')->on('estados')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fornecedores');
    }
}