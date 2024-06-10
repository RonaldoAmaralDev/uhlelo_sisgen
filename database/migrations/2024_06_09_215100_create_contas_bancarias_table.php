<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContasBancariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contas_bancarias', function (Blueprint $table) {
            $table->id('cod_conta');
            $table->unsignedBigInteger('cod_banco')->nullable(false);
            $table->string('agencia', 10)->nullable(false);
            $table->string('conta', 10)->nullable(false);
            $table->string('tp_conta', 1)->nullable();
            $table->timestamps();

            $table->foreign('cod_banco')->references('id')->on('bancos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contas_bancarias');
    }
}
