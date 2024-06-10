<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbastecimentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abastecimento', function (Blueprint $table) {
            $table->id('cod_abastecimento');
            $table->unsignedBigInteger('cod_veiculo');
            $table->unsignedBigInteger('cod_colaborador')->nullable();
            $table->unsignedBigInteger('cod_fornecedor');
            $table->unsignedBigInteger('cod_processo')->nullable();
            $table->unsignedBigInteger('cod_tp_combustivel')->nullable();
            $table->string('ticket', 10)->nullable();
            $table->double('km_atual');
            $table->double('km_anterior')->nullable();
            $table->decimal('litros', 10, 3);
            $table->decimal('valor_un', 10, 3);
            $table->decimal('valor_total', 10, 3);
            $table->date('dt_abastecimento');
            $table->dateTime('dt_cad');
            $table->unsignedBigInteger('cod_sec_user');
            $table->integer('conta_gerada')->nullable();
            $table->integer('km_atualizado')->nullable();
            $table->timestamps();

            $table->foreign('cod_veiculo')->references('id')->on('veiculos');
            $table->foreign('cod_colaborador')->references('id')->on('colaboradores');
            $table->foreign('cod_fornecedor')->references('id')->on('fornecedores');
            $table->foreign('cod_processo')->references('id')->on('processos');
            $table->foreign('cod_tp_combustivel')->references('id')->on('tipos_combustivel');
            $table->foreign('cod_sec_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abastecimento');
    }
}
