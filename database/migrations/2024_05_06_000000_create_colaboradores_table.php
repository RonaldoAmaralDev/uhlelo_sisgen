<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColaboradoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colaboradores', function (Blueprint $table) {
            $table->id('cod_colaborador');
            $table->unsignedBigInteger('cod_colaborador2')->default(0)->comment('referencia cod_sec_user');
            $table->unsignedBigInteger('cod_tp_colaborador')->nullable();
            $table->unsignedBigInteger('cod_departamento')->nullable();
            $table->unsignedBigInteger('cod_empresa')->nullable();
            $table->string('matricula', 5)->nullable();
            $table->unsignedBigInteger('cod_cidade')->nullable();
            $table->unsignedBigInteger('cod_estado')->nullable();
            $table->string('colaborador', 100);
            $table->char('cpf', 20)->nullable();
            $table->string('rg', 20)->nullable();
            $table->date('rg_dt_expedicao')->nullable();
            $table->string('titulo_eleitor', 30)->nullable();
            $table->string('zona', 10)->nullable();
            $table->string('secao', 10)->nullable();
            $table->string('ctps_num', 10)->nullable();
            $table->string('ctps_serie', 10)->nullable();
            $table->string('ctps_uf', 2)->nullable();
            $table->date('ctps_dt_expedicao')->nullable();
            $table->string('cert_reserva', 20)->nullable();
            $table->string('pis_pasep', 20)->nullable();
            $table->date('pis_dt')->nullable();
            $table->char('endereco', 100)->nullable();
            $table->string('bairro', 50)->nullable();
            $table->string('num', 11)->nullable();
            $table->char('cep', 12)->nullable();
            $table->string('comp', 50)->nullable();
            $table->string('sexo', 2)->nullable();
            $table->string('ecivil', 1)->nullable();
            $table->char('tel', 20)->nullable();
            $table->char('cel', 20)->nullable();
            $table->string('fax', 20)->nullable();
            $table->char('email', 100)->nullable();
            $table->date('dt_nasc')->nullable();
            $table->date('dt_admissao')->nullable();
            $table->date('dt_cadastro')->nullable();
            $table->tinyInteger('ativo')->nullable();
            $table->tinyInteger('afastado')->nullable();
            $table->string('foto_cnh', 100)->nullable();
            $table->string('tipo_cnh', 2)->nullable();
            $table->string('num_cnh', 30)->nullable();
            $table->date('val_cnh')->nullable();
            $table->tinyInteger('res_168')->nullable();
            $table->string('nome_pai', 100)->nullable();
            $table->string('nome_mae', 100)->nullable();
            $table->string('ref1', 100)->nullable();
            $table->string('tel_ref1', 20)->nullable();
            $table->string('ref2', 100)->nullable();
            $table->string('tel_ref2', 20)->nullable();
            $table->string('ref3', 100)->nullable();
            $table->string('tel_ref3', 20)->nullable();
            $table->string('comissao', 5)->nullable();
            $table->string('foto_colab', 100)->nullable();
            $table->string('senha_os', 4)->default('0');
            $table->unsignedBigInteger('finaliza_os')->nullable();
            $table->unsignedBigInteger('executa_os')->nullable();
            $table->integer('ajusta_cadastro_veiculo')->default(0);
            $table->integer('linha_amarela')->default(0);
            $table->integer('borracharia')->default(0);
            $table->timestamps();

            $table->foreign('cod_departamento')->references('id')->on('departamentos')->onDelete('set null');
            $table->foreign('cod_empresa')->references('id')->on('empresas')->onDelete('set null');
            $table->foreign('cod_cidade')->references('id')->on('cidades')->onDelete('set null');
            $table->foreign('cod_estado')->references('id')->on('estados')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colaboradores');
    }
}