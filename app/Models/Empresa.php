<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = 'empresas';
    protected $primaryKey = 'cod_empresas';
    public $timestamps = true;

    protected $fillable = [
        'tipo',
        'cnpj',
        'inscricao_estadual',
        'empresa',
        'endereco',
        'num',
        'bairro',
        'cod_cidade',
        'cod_estado',
        'cep',
        'contato',
        'representante',
        'tel',
        'cel',
        'fax',
        'email',
        'site',
        'instagram',
        'logo',
        'logo_home',
        'google_api_key',
        'token_tecnospeed',
        'token_receita_ws',
        'user_api_atak',
        'pass_api_atak',
        'token_api_atak',
        'antt',
        'token_api_sisgen',
        'user_api_sisgen',
        'pass_api_sisgen',
    ];
}
