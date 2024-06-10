<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContaBancaria extends Model
{
    use HasFactory;

    protected $table = 'contas_bancarias';
    protected $primaryKey = 'cod_conta';
    public $timestamps = true;

    protected $fillable = [
        'cod_banco',
        'agencia',
        'conta',
        'tp_conta',
    ];

    // Define a relação com a tabela de bancos
    public function banco()
    {
        return $this->belongsTo(Banco::class, 'cod_banco');
    }
}
