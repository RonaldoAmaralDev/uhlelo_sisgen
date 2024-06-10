<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;

    protected $table = 'contratos';
    protected $primaryKey = 'cod_contrato';
    public $timestamps = false;

    protected $fillable = [
        'cod_unidade',
        'cod_responsavel',
        'km_valor',
        'hora_valor',
        'dt_inicio',
        'dt_fim',
        'ativo',
        'dt_cad',
        'cod_sec_user',
    ];

    // Define a relação com a tabela de unidades
    public function unidade()
    {
        return $this->belongsTo(Unidade::class, 'cod_unidade');
    }

    // Define a relação com a tabela de responsaveis
    public function responsavel()
    {
        return $this->belongsTo(Responsavel::class, 'cod_responsavel');
    }

    // Define a relação com a tabela de usuarios
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'cod_sec_user');
    }
}
