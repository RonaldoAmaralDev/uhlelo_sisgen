<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FornecedorHistorico extends Model
{
    use HasFactory;

    protected $table = 'fornecedor_historico';
    protected $primaryKey = 'cod_fornecedor_historico';
    public $timestamps = true;

    protected $fillable = [
        'cod_fornecedor',
        'status',
        'detalhes',
        'dt_cad',
        'cod_sec_user',
    ];

}
