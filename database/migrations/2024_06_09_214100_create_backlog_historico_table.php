<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBacklogHistoricoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backlog_historico', function (Blueprint $table) {
            $table->id('cod_backlog_historico');
            $table->unsignedBigInteger('cod_backlog')->nullable();
            $table->unsignedBigInteger('cod_backlog_status')->nullable();
            $table->text('detalhes')->nullable();
            $table->dateTime('dt_cad')->nullable();
            $table->unsignedBigInteger('cod_sec_user')->nullable();
            $table->timestamps();

            $table->foreign('cod_backlog')->references('id')->on('backlog');
            $table->foreign('cod_backlog_status')->references('id')->on('backlog_status');
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
        Schema::dropIfExists('backlog_historico');
    }
}
