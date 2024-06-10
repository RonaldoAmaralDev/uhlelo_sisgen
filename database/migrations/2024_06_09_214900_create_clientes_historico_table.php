<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesHistoricoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes_historico', function (Blueprint $table) {
            $table->id('cod_clientes_historico');
            $table->unsignedBigInteger('cod_cliente')->nullable(false);
            $table->unsignedBigInteger('cod_colaborador')->nullable(false);
            $table->text('motivo')->nullable(false);
            $table->date('dt_cad')->nullable(false);
            $table->time('hora_cad')->nullable(false);
            $table->tinyInteger('devedor')->nullable(false);
            $table->timestamps();

            $table->foreign('cod_cliente')->references('id')->on('clientes');
            $table->foreign('cod_colaborador')->references('id')->on('colaboradores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes_historico');
    }
}
