<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FerramentaCaixaColaboradorTermo extends Model
{
    use HasFactory;

    protected $table = 'ferramenta_caixa_colaborador_termo';
    protected $primaryKey = 'cod_ferramenta_caixa_colaborador_termo';
    public $timestamps = true;

    protected $fillable = [
        'cod_ferramenta_caixa',
        'cod_colaborador',
        'doc',
        'dt_cad',
        'cod_sec_user',
    ];

    // Adicione as relações conforme necessário
}
