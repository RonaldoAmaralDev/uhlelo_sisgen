<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpostosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impostos', function (Blueprint $table) {
            $table->id('cod_imposto');
            $table->unsignedBigInteger('cod_contas_finan')->nullable();
            $table->unsignedTinyInteger('cod_uf_o')->default(0);
            $table->unsignedTinyInteger('cod_uf_d')->default(0);
            $table->string('imposto', 55);
            $table->double('aliquota', 10, 2);
            $table->timestamps();

            $table->foreign('cod_contas_finan')->references('id')->on('contas_finan')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('impostos');
    }
}