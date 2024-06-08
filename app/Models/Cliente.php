<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    protected $primaryKey = 'cod_cliente';
    protected $fillable = [
        'cod_cidade',
        'cod_estado',
        'cliente',
        'nome_fantasia',
        'ramo_atividade',
        'situacao',
        'motivo_situacao',
        'cpf_cnpj',
        'inscricao',
        'endereco',
        'bairro',
        'num',
        'cep',
        'comp',
        'contato',
        'tel',
        'cel',
        'email',
        'site',
        'dt_nasc',
        'dt_cadastro',
        'ativo',
        'imposto_local',
        'devedor',
        'gera_comissao',
        'campos_validados',
    ];

    protected $casts = [
        'ativo' => 'boolean',
        'imposto_local' => 'boolean',
    ];

    protected $dates = ['dt_nasc', 'dt_cadastro'];

    public function cidade()
    {
        return $this->belongsTo(Cidade::class, 'cod_cidade');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'cod_estado');
    }
}