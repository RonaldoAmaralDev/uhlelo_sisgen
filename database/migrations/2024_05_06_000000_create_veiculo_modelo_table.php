<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculoModeloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculo_modelo', function (Blueprint $table) {
            $table->id('cod_veiculo_modelo');
            $table->unsignedBigInteger('cod_veiculo_marca')->nullable(false);
            $table->string('veiculo_modelo', 100)->nullable(false);
            $table->decimal('tara', 10, 2)->nullable();
            $table->decimal('capacidade', 10, 2)->nullable();
            $table->timestamps();
            
            $table->foreign('cod_veiculo_marca')->references('cod_veiculo_marca')->on('veiculo_marca')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculo_modelo');
    }
}