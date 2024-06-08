<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;

    protected $table = 'fornecedores';
    protected $primaryKey = 'cod_fornecedor';
    protected $fillable = [
        'cod_cidade',
        'cod_estado',
        'fornecedor',
        'nome_fantasia',
        'situacao',
        'motivo_situacao',
        'ramo_atividade',
        'cpf_cnpj',
        'endereco',
        'comp',
        'bairro',
        'num',
        'cep',
        'contato',
        'tel',
        'cel',
        'email',
        'site',
        'dt_cadastro',
        'ativo',
        'motorista',
        'foto_cnh',
        'tipo_cnh',
        'num_cnh',
        'val_cnh',
        'metrologia',
        'abastecimento',
        'contribuinte_icms',
        'bloqueado',
    ];

    protected $casts = [
        'ativo' => 'boolean',
        'motorista' => 'boolean',
    ];
}