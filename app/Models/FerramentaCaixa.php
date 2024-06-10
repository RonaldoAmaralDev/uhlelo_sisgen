<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FerramentaCaixa extends Model
{
    use HasFactory;

    protected $table = 'ferramenta_caixa';
    protected $primaryKey = 'cod_ferramenta_caixa';
    public $timestamps = true;

    protected $fillable = [
        'nome',
        'dt_cad',
        'cod_sec_user',
    ];

    // Adicione as relações conforme necessário
}
