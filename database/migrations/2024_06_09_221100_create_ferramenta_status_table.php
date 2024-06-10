<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFerramentaStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ferramenta_status', function (Blueprint $table) {
            $table->id('cod_ferramenta_status');
            $table->string('cor', 10)->nullable();
            $table->string('ferramenta_status', 100);
            $table->integer('cadastro')->nullable();
            $table->integer('movimentacao');
            $table->string('tipo', 1)->nullable();
            $table->integer('atualiza_status_ferramenta')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ferramenta_status');
    }
}
