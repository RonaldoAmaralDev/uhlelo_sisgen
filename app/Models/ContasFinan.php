<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContasFinan extends Model
{
    use HasFactory;

    protected $table = 'contas_finan';
    protected $primaryKey = 'cod_contas_finan';
    public $timestamps = true;

    protected $fillable = [
        'cod_grupo_contas_finan',
        'cod_tp_recorrencia',
        'tipo',
        'tipo_conta',
        'contas_finan',
        'ativo',
        'utilizado_proposta',
        'base_calculo',
        'gera_conta_pagar',
        'abate_comissao',
        'calcula_dashboard',
    ];

    // Define a relação com a tabela de grupo_contas_finan
    public function grupoContasFinan()
    {
        return $this->belongsTo(GrupoContasFinan::class, 'cod_grupo_contas_finan');
    }

    // Define a relação com a tabela de tipo_recorrencia
    public function tipoRecorrencia()
    {
        return $this->belongsTo(TipoRecorrencia::class, 'cod_tp_recorrencia');
    }
}
