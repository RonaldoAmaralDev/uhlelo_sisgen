<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientesHistorico extends Model
{
    use HasFactory;

    protected $table = 'clientes_historico';
    protected $primaryKey = 'cod_clientes_historico';
    public $timestamps = true;

    protected $fillable = [
        'cod_cliente',
        'cod_colaborador',
        'motivo',
        'dt_cad',
        'hora_cad',
        'devedor',
    ];

    // Define a relação com a tabela de clientes
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cod_cliente');
    }

    // Define a relação com a tabela de colaboradores
    public function colaborador()
    {
        return $this->belongsTo(Colaborador::class, 'cod_colaborador');
    }
}
