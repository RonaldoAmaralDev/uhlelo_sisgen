<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ferramenta extends Model
{
    use HasFactory;

    protected $table = 'ferramentas';
    protected $primaryKey = 'cod_ferramenta';
    public $timestamps = true;

    protected $fillable = [
        'cod_ferramenta_status',
        'cod_tp_ferramenta',
        'cod_item',
        'cod_item_local',
        'cod_item_marca',
        'cod_aux',
        'cod_unidade',
        'ferramenta',
        'metrologia',
        'qte',
        'qte_uso',
        'dt_cad',
        'cod_sec_user',
    ];

}
