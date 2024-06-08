<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VeiculoMarca extends Model
{
    use HasFactory;

    protected $table = 'veiculo_marca';
    protected $primaryKey = 'cod_veiculo_marca';
    protected $fillable = [
        'veiculo_marca',
    ];
}