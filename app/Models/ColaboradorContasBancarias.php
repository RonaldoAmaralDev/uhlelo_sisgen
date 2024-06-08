<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColaboradorContaBancaria extends Model
{
    use HasFactory;

    protected $table = 'colaborador_contas_bancarias';
    protected $primaryKey = 'cod_colaborador_contas_bancarias';
    protected $fillable = [
        'cod_colaborador',
        'cod_banco',
        'tipo',
        'cod_tp_chave_pix',
        'agencia',
        'agencia_dv',
        'conta',
        'conta_dv',
        'favorecido',
        'cpf',
        'chavepix',
        'chavepix_telefone',
        'chavepix_email',
        'principal',
    ];

    protected $casts = [
        'principal' => 'boolean',
    ];

    public function colaborador()
    {
        return $this->belongsTo(Colaborador::class, 'cod_colaborador');
    }

    public function banco()
    {
        return $this->belongsTo(Banco::class, 'cod_banco');
    }

    public function tipoChavePix()
    {
        return $this->belongsTo(TipoChavePix::class, 'cod_tp_chave_pix');
    }
}