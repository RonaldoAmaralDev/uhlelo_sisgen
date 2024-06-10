<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id('cod_item');
            $table->string('cod_atak', 20)->default('');
            $table->unsignedBigInteger('cod_tp_item')->default(0);
            $table->unsignedBigInteger('cod_item_marca')->default(0);
            $table->unsignedBigInteger('cod_dimensao')->nullable()->default(0);
            $table->unsignedBigInteger('cod_un_medida')->default(0);
            $table->string('un_medida_aux', 10)->nullable();
            $table->unsignedBigInteger('controla_lote')->default(0);
            $table->string('descricao', 100);
            $table->tinyInteger('ativo')->default(1);
            $table->unsignedBigInteger('borracharia')->default(0);
            $table->unsignedBigInteger('qte')->nullable();
            $table->decimal('custo', 10, 2)->nullable();
            $table->unsignedBigInteger('cod_aux_ferramenta')->nullable();
            $table->unsignedBigInteger('ferramentaria')->default(0);
            $table->unsignedBigInteger('movimenta_estoque')->default(0);
            $table->dateTime('dt_cad')->nullable();
            $table->date('dt_alteracao')->nullable();
            $table->unsignedBigInteger('cod_sec_user')->nullable();
            $table->timestamps();

            $table->foreign('cod_tp_item')->references('id')->on('tipo_items')->onDelete('cascade');
            $table->foreign('cod_item_marca')->references('id')->on('item_marcas')->onDelete('cascade');
            $table->foreign('cod_dimensao')->references('id')->on('dimensoes')->onDelete('cascade');
            $table->foreign('cod_un_medida')->references('id')->on('un_medidas')->onDelete('cascade');
            $table->foreign('cod_aux_ferramenta')->references('id')->on('ferramenta_caixa_items')->onDelete('cascade');
            $table->foreign('cod_sec_user')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}