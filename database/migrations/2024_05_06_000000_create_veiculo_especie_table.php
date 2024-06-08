<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculoEspecieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculo_especie', function (Blueprint $table) {
            $table->id('cod_veiculo_especie');
            $table->string('veiculo_especie', 100)->nullable(false);
            $table->string('capacidade', 10)->nullable();
            $table->string('controle_os', 1)->nullable(false);
            $table->unsignedBigInteger('valida_km_horimetro')->nullable();
            $table->unsignedBigInteger('cod_os_plano_manutencao_01')->nullable();
            $table->unsignedBigInteger('cod_os_plano_manutencao_02')->nullable();
            $table->unsignedBigInteger('posicao_conjunto')->nullable();
            $table->timestamps();
        });

        Schema::table('veiculo_especie', function (Blueprint $table) {
            // Se necessário, adicione chaves estrangeiras adicionais aqui.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculo_especie');
    }
}