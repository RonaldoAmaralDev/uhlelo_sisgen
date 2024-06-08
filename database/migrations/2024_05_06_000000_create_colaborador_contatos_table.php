<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColaboradorContatosTable extends Migration
{
    /**
     * Executa as migrações.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colaborador_contatos', function (Blueprint $table) {
            $table->increments('cod_colaborador_contatos');
            $table->unsignedInteger('cod_colaborador');
            $table->string('celular', 20);
            $table->string('contato', 100)->nullable();
            $table->foreign('cod_colaborador')->references('id')->on('colaboradores');
        });
    }

    /**
     * Reverte as migrações.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colaborador_contatos');
    }
}
