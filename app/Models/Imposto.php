<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imposto extends Model
{
    use HasFactory;

    protected $table = 'impostos';
    protected $primaryKey = 'cod_imposto';
    public $timestamps = true;

    protected $fillable = [
        'cod_contas_finan',
        'cod_uf_o',
        'cod_uf_d',
        'imposto',
        'aliquota',
    ];

    public function contaFinanceira()
    {
        return $this->belongsTo(ContasFinan::class, 'cod_contas_finan');
    }
}
