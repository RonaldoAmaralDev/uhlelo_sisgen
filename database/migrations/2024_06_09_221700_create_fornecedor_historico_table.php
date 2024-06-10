<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedorHistoricoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedor_historico', function (Blueprint $table) {
            $table->id('cod_fornecedor_historico');
            $table->unsignedBigInteger('cod_fornecedor')->nullable();
            $table->integer('status')->nullable()->comment('0 - Desbloqueado / 1 - Bloqueado');
            $table->string('detalhes', 255)->nullable();
            $table->dateTime('dt_cad')->nullable();
            $table->unsignedBigInteger('cod_sec_user')->nullable();
            $table->timestamps();

            $table->foreign('cod_fornecedor')->references('id')->on('fornecedors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fornecedor_historico');
    }
}
