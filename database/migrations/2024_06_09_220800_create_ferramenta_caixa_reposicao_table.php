<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFerramentaCaixaReposicaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ferramenta_caixa_reposicao', function (Blueprint $table) {
            $table->id('cod_ferramenta_caixa_reposicao');
            $table->unsignedBigInteger('cod_ferramenta_caixa_item')->nullable();
            $table->unsignedBigInteger('cod_ferramenta_caixa')->nullable();
            $table->unsignedBigInteger('cod_colaborador')->nullable();
            $table->string('tipo', 2)->nullable();
            $table->string('motivo', 255)->nullable();
            $table->date('dt_solicitacao')->nullable();
            $table->date('dt_reposicao')->nullable();
            $table->dateTime('dt_cad')->nullable();
            $table->unsignedBigInteger('cod_sec_user')->nullable();
            $table->timestamps();

            $table->foreign('cod_ferramenta_caixa_item')->references('id')->on('ferramenta_caixa_item');
            $table->foreign('cod_ferramenta_caixa')->references('id')->on('ferramenta_caixa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ferramenta_caixa_reposicao');
    }
}