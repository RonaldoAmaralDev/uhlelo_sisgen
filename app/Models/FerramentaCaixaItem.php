<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FerramentaCaixaItem extends Model
{
    use HasFactory;

    protected $table = 'ferramenta_caixa_item';
    protected $primaryKey = 'cod_ferramenta_caixa_item';
    public $timestamps = true;

    protected $fillable = [
        'cod_ferramenta_caixa',
        'cod_ferramenta',
        'qte',
        'dt_cad',
        'cod_sec_user',
    ];

}
