<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoContasFinan extends Model
{
    use HasFactory;

    protected $table = 'grupo_contas_finan';
    protected $primaryKey = 'cod_grupo_contas_finan';
    public $timestamps = true;

    protected $fillable = [
        'grupo_contas_finan',
        'processos',
    ];

}
