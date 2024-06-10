<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FerramentaMov extends Model
{
    use HasFactory;

    protected $table = 'ferramenta_mov';
    protected $primaryKey = 'cod_ferramenta_mov';
    public $timestamps = true;

    protected $fillable = [
        'cod_ferramenta',
        'cod_ferramenta_caixa',
        'cod_colaborador_retirou',
        'cod_colaborador_autorizou',
        'cod_ferramenta_status',
        'cod_turno',
        'tipo',
        'dt_retirada',
        'obs',
        'dt_devolvida',
        'obs_devolucao',
        'cod_colaborador_recebeu',
        'devolvida',
    ];

}
