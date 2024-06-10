<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFerramentaMovTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ferramenta_mov', function (Blueprint $table) {
            $table->id('cod_ferramenta_mov');
            $table->unsignedBigInteger('cod_ferramenta');
            $table->unsignedBigInteger('cod_ferramenta_caixa')->nullable();
            $table->unsignedBigInteger('cod_colaborador_retirou');
            $table->unsignedBigInteger('cod_colaborador_autorizou');
            $table->unsignedBigInteger('cod_ferramenta_status');
            $table->unsignedBigInteger('cod_turno');
            $table->string('tipo', 1);
            $table->dateTime('dt_retirada');
            $table->text('obs');
            $table->dateTime('dt_devolvida')->nullable();
            $table->text('obs_devolucao')->nullable();
            $table->unsignedBigInteger('cod_colaborador_recebeu');
            $table->integer('devolvida')->default(0);
            $table->timestamps();

            $table->foreign('cod_ferramenta')->references('id')->on('ferramenta');
            $table->foreign('cod_ferramenta_caixa')->references('id')->on('ferramenta_caixa');
            $table->foreign('cod_colaborador_retirou')->references('id')->on('colaboradores');
            $table->foreign('cod_colaborador_autorizou')->references('id')->on('colaboradores');
            $table->foreign('cod_ferramenta_status')->references('id')->on('ferramenta_status');
            $table->foreign('cod_turno')->references('id')->on('turnos');
            $table->foreign('cod_colaborador_recebeu')->references('id')->on('colaboradores');
            // Adicione as chaves estrangeiras necessárias
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ferramenta_mov');
    }
}
