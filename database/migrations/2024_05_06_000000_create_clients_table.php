<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('cod_cliente');
            $table->unsignedBigInteger('cod_cidade');
            $table->unsignedBigInteger('cod_estado');
            $table->string('cliente', 100);
            $table->string('nome_fantasia', 100)->nullable();
            $table->string('ramo_atividade', 255)->nullable();
            $table->string('situacao', 100)->nullable();
            $table->string('motivo_situacao', 100)->nullable();
            $table->string('cpf_cnpj', 20)->nullable();
            $table->string('inscricao', 30)->nullable();
            $table->char('endereco', 100)->nullable();
            $table->string('bairro', 50)->nullable();
            $table->string('num', 11)->nullable();
            $table->char('cep', 12)->nullable();
            $table->string('comp', 50)->nullable();
            $table->string('contato', 100)->nullable();
            $table->char('tel', 20)->nullable();
            $table->char('cel', 20)->nullable();
            $table->char('email', 100)->nullable();
            $table->string('site', 100)->nullable();
            $table->date('dt_nasc')->nullable();
            $table->date('dt_cadastro')->nullable();
            $table->tinyInteger('ativo')->nullable();
            $table->tinyInteger('imposto_local');
            $table->integer('devedor')->default(0);
            $table->integer('gera_comissao')->nullable();
            $table->integer('campos_validados')->default(0);
            $table->timestamps();
        });

        Schema::table('clientes', function (Blueprint $table) {
            $table->foreign('cod_cidade')->references('id')->on('cidades');
            $table->foreign('cod_estado')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}