<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FerramentaCaixaReposicao extends Model
{
    use HasFactory;

    protected $table = 'ferramenta_caixa_reposicao';
    protected $primaryKey = 'cod_ferramenta_caixa_reposicao';
    public $timestamps = true;

    protected $fillable = [
        'cod_ferramenta_caixa_item',
        'cod_ferramenta_caixa',
        'cod_colaborador',
        'tipo',
        'motivo',
        'dt_solicitacao',
        'dt_reposicao',
        'dt_cad',
        'cod_sec_user',
    ];

}
