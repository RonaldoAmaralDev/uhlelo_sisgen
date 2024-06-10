<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormaRecebimentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forma_recebimento', function (Blueprint $table) {
            $table->id('cod_forma_recebimento');
            $table->unsignedBigInteger('cod_conta_bancaria');
            $table->unsignedBigInteger('cod_tp_forma_recebimento');
            $table->string('forma_recebimento', 100);
            $table->tinyInteger('transferencia')->nullable();
            $table->tinyInteger('ativo')->nullable();
            $table->tinyInteger('baixa_automatica')->nullable();
            $table->tinyInteger('retencao');
            $table->integer('prazo_pg')->nullable();
            $table->timestamps();

            $table->foreign('cod_conta_bancaria')->references('cod_conta')->on('contas_bancarias');
            // Adicione as demais chaves estrangeiras necessárias
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forma_recebimento');
    }
}