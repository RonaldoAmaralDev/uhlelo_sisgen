<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContasFinanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contas_finan', function (Blueprint $table) {
            $table->id('cod_contas_finan');
            $table->unsignedBigInteger('cod_grupo_contas_finan')->nullable(false);
            $table->unsignedBigInteger('cod_tp_recorrencia')->nullable();
            $table->string('tipo', 1)->nullable(false);
            $table->string('tipo_conta', 1)->nullable(false);
            $table->string('contas_finan', 100)->nullable(false);
            $table->string('ativo', 1)->nullable(false)->default('0');
            $table->tinyInteger('utilizado_proposta')->nullable(false)->default(0);
            $table->decimal('base_calculo', 10, 2)->nullable()->default(0.00);
            $table->unsignedBigInteger('gera_conta_pagar')->default(0);
            $table->unsignedBigInteger('abate_comissao')->default(0);
            $table->unsignedBigInteger('calcula_dashboard')->default(0);
            $table->timestamps();

            $table->foreign('cod_grupo_contas_finan')->references('id')->on('grupo_contas_finan');
            $table->foreign('cod_tp_recorrencia')->references('id')->on('tipo_recorrencia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contas_finan');
    }
}
