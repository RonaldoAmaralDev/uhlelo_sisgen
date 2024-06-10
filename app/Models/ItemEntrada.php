<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemEntrada extends Model
{
    use HasFactory;

    protected $table = 'item_entrada';
    protected $primaryKey = 'cod_item_entrada';
    protected $fillable = ['cod_entrada', 'cod_item_estoque', 'qte', 'valor', 'total', 'dt_cad'];
}
