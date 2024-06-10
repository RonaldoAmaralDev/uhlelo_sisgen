<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBacklogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backlog', function (Blueprint $table) {
            $table->id('cod_backlog');
            $table->unsignedBigInteger('cod_veiculo')->nullable();
            $table->unsignedBigInteger('cod_backlog_acao')->nullable();
            $table->unsignedBigInteger('cod_backlog_status')->nullable();
            $table->unsignedBigInteger('cod_tp_criticidade')->nullable();
            $table->unsignedBigInteger('cod_responsavel')->nullable();
            $table->unsignedBigInteger('cod_os_gestao_abriu')->nullable();
            $table->unsignedBigInteger('cod_os_gestao_finalizou')->nullable();
            $table->string('descricao_falha', 255)->nullable();
            $table->string('obs', 255)->nullable();
            $table->dateTime('dt_cad')->nullable();
            $table->dateTime('dt_finalizou')->nullable();
            $table->unsignedBigInteger('cod_sec_user_abriu')->nullable();
            $table->unsignedBigInteger('cod_sec_user_finalizou')->nullable();
            $table->timestamps();

            $table->foreign('cod_veiculo')->references('id')->on('veiculos');
            $table->foreign('cod_backlog_acao')->references('id')->on('backlog_acoes');
            $table->foreign('cod_backlog_status')->references('id')->on('backlog_status');
            $table->foreign('cod_tp_criticidade')->references('id')->on('tipos_criticidade');
            $table->foreign('cod_responsavel')->references('id')->on('responsaveis');
            $table->foreign('cod_os_gestao_abriu')->references('id')->on('ordens_servico');
            $table->foreign('cod_os_gestao_finalizou')->references('id')->on('ordens_servico');
            $table->foreign('cod_sec_user_abriu')->references('id')->on('users');
            $table->foreign('cod_sec_user_finalizou')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('backlog');
    }
}
