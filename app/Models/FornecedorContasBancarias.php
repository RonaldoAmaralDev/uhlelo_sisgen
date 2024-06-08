<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FornecedorContasBancaria extends Model
{
    use HasFactory;

    protected $table = 'fornecedor_contas_bancarias';
    protected $primaryKey = 'cod_fornecedor_contas_bancarias';
    protected $fillable = [
        'cod_fornecedor',
        'cod_banco',
        'tipo',
        'cod_tp_chave_pix',
        'agencia',
        'agencia_dv',
        'conta',
        'conta_dv',
        'favorecido',
        'cpf',
        'chavepix',
        'chavepix_telefone',
        'chavepix_email',
        'principal',
    ];

    protected $casts = [
        'principal' => 'boolean',
    ];

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class, 'cod_fornecedor');
    }
}