<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormaRecebimento extends Model
{
    use HasFactory;

    protected $table = 'forma_recebimento';
    protected $primaryKey = 'cod_forma_recebimento';
    public $timestamps = true;

    protected $fillable = [
        'cod_conta_bancaria',
        'cod_tp_forma_recebimento',
        'forma_recebimento',
        'transferencia',
        'ativo',
        'baixa_automatica',
        'retencao',
        'prazo_pg',
    ];

}
