<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteContato extends Model
{
    use HasFactory;

    protected $table = 'clientes_contatos';
    protected $primaryKey = 'cod_clientes_contatos';
    protected $fillable = [
        'cod_cliente',
        'cod_tp_contato',
        'contato',
        'celular',
        'email',
        'principal',
        'dt_cad',
        'cod_sec_user',
    ];

    protected $casts = [
        'principal' => 'boolean',
    ];

    protected $dates = ['dt_cad'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cod_cliente');
    }

    public function tipoContato()
    {
        return $this->belongsTo(TipoContato::class, 'cod_tp_contato');
    }

    public function secUser()
    {
        return $this->belongsTo(User::class, 'cod_sec_user');
    }
}