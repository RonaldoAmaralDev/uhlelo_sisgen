<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FerramentaCaixaColaborador extends Model
{
    use HasFactory;

    protected $table = 'ferramenta_caixa_colaborador';
    protected $primaryKey = 'cod_ferramenta_caixa_colaborador';
    public $timestamps = true;

    protected $fillable = [
        'cod_ferramenta_caixa',
        'cod_ferramenta_caixa_item',
        'cod_colaborador',
        'qte',
        'dt_cad',
        'cod_sec_user',
    ];

    // Adicione as relações conforme necessário
}
