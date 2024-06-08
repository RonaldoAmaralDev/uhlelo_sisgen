<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id('cod_veiculo');
            $table->unsignedBigInteger('cod_veiculo_especie')->nullable(false);
            $table->string('frota', 10)->nullable();
            $table->unsignedBigInteger('cod_veiculo_marca')->nullable(false);
            $table->unsignedBigInteger('cod_tp_frota')->nullable();
            $table->string('frota_aux', 10)->nullable();
            $table->unsignedBigInteger('cod_veiculo_modelo')->nullable(false);
            $table->unsignedBigInteger('cod_empresa')->nullable(false);
            $table->unsignedBigInteger('cod_unidade')->nullable(false);
            $table->unsignedBigInteger('cod_sub_unidade')->nullable();
            $table->unsignedBigInteger('cod_cor')->nullable();
            $table->integer('posicao_conjunto')->default(0)->comment('0 - cavalo / 1 - implemento');
            $table->integer('backlog_aberto')->default(0);
            $table->unsignedBigInteger('os_ciclo_preventivo')->nullable();
            $table->double('km_atual')->default(0);
            $table->double('horimetro_analogico')->default(0);
            $table->double('horimetro_digital')->default(0);
            $table->string('motor', 50)->nullable(false);
            $table->unsignedBigInteger('retarder')->nullable();
            $table->decimal('tara', 10, 2)->nullable();
            $table->decimal('capacidade', 10, 2)->nullable();
            $table->string('placa', 10)->nullable(false);
            $table->string('renavam', 50)->nullable(false);
            $table->string('chassi', 50)->nullable(false);
            $table->string('antt', 30)->nullable();
            $table->date('dt_antt')->nullable();
            $table->string('cor', 10)->nullable(false);
            $table->string('ano', 4)->nullable(false);
            $table->string('modelo_fab', 4)->nullable();
            $table->string('doc', 255)->nullable();
            $table->date('dt_val_doc')->nullable();
            $table->date('dt_compra')->nullable();
            $table->date('dt_garantia')->nullable();
            $table->integer('garantia')->nullable();
            $table->string('tanque', 4)->nullable();
            $table->text('obs')->nullable();
            $table->tinyInteger('ativo')->nullable();
            $table->tinyInteger('linha_amarela')->default(0);
            $table->unsignedBigInteger('modulo_trocado')->nullable();
            $table->datetime('dt_cad')->nullable();
            $table->unsignedBigInteger('cod_sec_user')->nullable();
            $table->timestamps();

            $table->foreign('cod_veiculo_especie')->references('cod_veiculo_especie')->on('veiculo_especie')->onDelete('cascade');
            $table->foreign('cod_veiculo_marca')->references('cod_veiculo_marca')->on('veiculo_marca')->onDelete('cascade');
            $table->foreign('cod_veiculo_modelo')->references('cod_veiculo_modelo')->on('veiculo_modelo')->onDelete('cascade');
            $table->foreign('cod_empresa')->references('id')->on('empresas')->onDelete('cascade');
            $table->foreign('cod_unidade')->references('id')->on('unidades')->onDelete('cascade');
            $table->foreign('cod_sub_unidade')->references('id')->on('sub_unidades')->onDelete('cascade');
            $table->foreign('cod_cor')->references('id')->on('cores')->onDelete('cascade');
            $table->foreign('cod_sec_user')->references('id')->on('users')->onDelete('set null');
            $table->foreign('cod_tp_frota')->references('id')->on('tipo_frota')->onDelete('set null');
            $table->foreign('os_ciclo_preventivo')->references('id')->on('os_ciclo_preventivo')->onDelete('set null');
            $table->foreign('retarder')->references('id')->on('retarder')->onDelete('set null');
            $table->foreign('modulo_trocado')->references('id')->on('modulo_trocado')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculos');
    }
}