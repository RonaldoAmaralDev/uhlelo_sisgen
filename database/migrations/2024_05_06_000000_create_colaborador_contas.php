<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColaboradorContato extends Model
{
    use HasFactory;

    protected $table = 'colaborador_contatos';

    protected $primaryKey = 'cod_colaborador_contatos';

    protected $fillable = [
        'cod_colaborador',
        'celular',
        'contato',
    ];

    public function colaborador()
    {
        return $this->belongsTo(Colaborador::class, 'cod_colaborador', 'id');
    }
}