<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FornecedorContato extends Model
{
    use HasFactory;

    protected $table = 'fornecedor_contatos';
    protected $primaryKey = 'cod_fornecedor_contatos';
    protected $fillable = [
        'cod_fornecedor',
        'celular',
        'contato',
    ];

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class, 'cod_fornecedor');
    }
}