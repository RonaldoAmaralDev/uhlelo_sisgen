<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrada', function (Blueprint $table) {
            $table->id('cod_entrada');
            $table->unsignedBigInteger('cod_empresa');
            $table->unsignedBigInteger('cod_fornecedor');
            $table->unsignedBigInteger('cod_tp_natureza_op');
            $table->string('num_nf', 10);
            $table->date('dt_nf');
            $table->dateTime('dt_cad');
            $table->double('valor', 10, 2)->nullable();
            $table->text('detalhes')->nullable();
            $table->tinyInteger('importada')->default(0);
            $table->unsignedBigInteger('cod_sec_user')->nullable();
            $table->timestamps();

            $table->foreign('cod_empresa')->references('id')->on('empresas');
            $table->foreign('cod_fornecedor')->references('id')->on('fornecedores');
            $table->foreign('cod_tp_natureza_op')->references('id')->on('tipo_natureza_operacao');
            // Adicione a chave estrangeira para cod_sec_user, se necessário
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrada');
    }
}
