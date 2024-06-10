<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cidades', function (Blueprint $table) {
            $table->id('cod_cidade');
            $table->unsignedSmallInteger('cod_estado')->default(0)->index();
            $table->string('uf', 4)->default('');
            $table->string('cidade', 50)->default('');
            $table->unique('cod_cidade');

            // Foreign key constraint
            $table->foreign('cod_estado')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cidades');
    }
}
