<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratoItensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrato_itens', function (Blueprint $table) {
            $table->id('cod_contrato_item');
            $table->unsignedBigInteger('cod_contrato')->nullable();
            $table->unsignedBigInteger('cod_veiculo')->nullable();
            $table->unsignedBigInteger('num_aditivo')->nullable();
            $table->decimal('km_inicial', 10, 2)->nullable();
            $table->decimal('horimetro_digital_inicial', 10, 2)->nullable();
            $table->decimal('horimetro_analogico_inicial', 10, 2)->nullable();
            $table->decimal('km_final', 10, 2)->nullable();
            $table->decimal('horimetro_digital_final', 10, 2)->nullable();
            $table->decimal('horimetro_analogico_final', 10, 2)->nullable();
            $table->datetime('dt_cad')->nullable();
            $table->unsignedBigInteger('cod_sec_user')->nullable();
            $table->timestamps();

            $table->foreign('cod_contrato')->references('id')->on('contratos');
            $table->foreign('cod_veiculo')->references('id')->on('veiculos');
            $table->foreign('num_aditivo')->references('id')->on('aditivos');
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
        Schema::dropIfExists('contrato_itens');
    }
}
