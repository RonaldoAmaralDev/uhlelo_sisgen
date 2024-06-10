<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FerramentaStatus extends Model
{
    use HasFactory;

    protected $table = 'ferramenta_status';
    protected $primaryKey = 'cod_ferramenta_status';
    public $timestamps = true;

    protected $fillable = [
        'cor',
        'ferramenta_status',
        'cadastro',
        'movimentacao',
        'tipo',
        'atualiza_status_ferramenta',
    ];

}
