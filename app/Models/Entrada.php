<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    use HasFactory;

    protected $table = 'entrada';
    protected $primaryKey = 'cod_entrada';
    public $timestamps = true;

    protected $fillable = [
        'cod_empresa',
        'cod_fornecedor',
        'cod_tp_natureza_op',
        'num_nf',
        'dt_nf',
        'dt_cad',
        'valor',
        'detalhes',
        'importada',
        'cod_sec_user',
    ];

    // Adicione as relações belongsTo conforme necessário
}
