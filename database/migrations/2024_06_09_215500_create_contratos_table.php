<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->id('cod_contrato');
            $table->unsignedBigInteger('cod_unidade')->nullable(false);
            $table->unsignedBigInteger('cod_responsavel')->nullable(false);
            $table->decimal('km_valor', 10, 2)->nullable(false);
            $table->decimal('hora_valor', 10, 2)->nullable(false);
            $table->date('dt_inicio')->nullable();
            $table->date('dt_fim')->nullable();
            $table->unsignedBigInteger('ativo')->nullable();
            $table->datetime('dt_cad')->nullable();
            $table->unsignedBigInteger('cod_sec_user')->nullable();

            $table->foreign('cod_unidade')->references('id')->on('unidades');
            $table->foreign('cod_responsavel')->references('id')->on('responsaveis');
            $table->foreign('cod_sec_user')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contratos');
    }
}
