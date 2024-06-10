<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id('cod_empresas');
            $table->string('tipo', 1)->nullable(false);
            $table->string('cnpj', 20)->nullable(false);
            $table->string('inscricao_estadual', 20)->nullable();
            $table->string('empresa', 100)->nullable(false);
            $table->string('endereco', 100)->nullable(false);
            $table->integer('num')->nullable(false);
            $table->string('bairro', 100)->nullable(false);
            $table->integer('cod_cidade')->nullable(false);
            $table->integer('cod_estado')->nullable(false);
            $table->string('cep', 14)->nullable(false);
            $table->string('contato', 100)->nullable(false);
            $table->string('representante', 100)->nullable();
            $table->string('tel', 100)->nullable(false);
            $table->string('cel', 100)->nullable(false);
            $table->string('fax', 20)->nullable(false);
            $table->string('email', 100)->nullable(false);
            $table->string('site', 100)->nullable(false);
            $table->string('instagram', 100)->nullable();
            $table->string('logo', 100)->nullable(false);
            $table->string('logo_home', 100)->nullable(false);
            $table->string('google_api_key', 100)->nullable();
            $table->string('token_tecnospeed', 100)->nullable();
            $table->string('token_receita_ws', 100)->nullable();
            $table->string('user_api_atak', 50)->nullable();
            $table->string('pass_api_atak', 50)->nullable();
            $table->text('token_api_atak')->nullable();
            $table->string('antt', 30)->nullable();
            $table->text('token_api_sisgen')->nullable();
            $table->string('user_api_sisgen', 20)->nullable();
            $table->string('pass_api_sisgen', 20)->nullable();
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
        Schema::dropIfExists('empresas');
    }
}
