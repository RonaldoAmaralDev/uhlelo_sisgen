<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FerramentaMaxCod extends Model
{
    use HasFactory;

    protected $table = 'ferramenta_max_cod';
    protected $primaryKey = 'cod_ferramenta_max_cod';
    public $timestamps = true;

    protected $fillable = [
        'cod_aux',
        'cod_unidade',
    ];

}
