<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;

    protected $table = 'cidades';
    protected $primaryKey = 'cod_cidade';
    public $timestamps = false;

    protected $fillable = [
        'cod_estado',
        'uf',
        'cidade',
    ];

    // Define a relação com a tabela de estados
    public function estado()
    {
        return $this->belongsTo(Estado::class, 'cod_estado');
    }
}
