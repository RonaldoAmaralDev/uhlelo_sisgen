<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Almoxarifado extends Model
{
    use HasFactory;

    protected $table = 'almoxarifados';
    protected $primaryKey = 'cod_almoxarifado';
    public $timestamps = true;

    protected $fillable = [
        'cod_unidade',
        'almoxarifado',
    ];

    // Define a relação com a tabela de unidades
    public function unidade()
    {
        return $this->belongsTo(Unidade::class, 'cod_unidade');
    }
}
