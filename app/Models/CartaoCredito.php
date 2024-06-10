<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartaoCredito extends Model
{
    use HasFactory;

    protected $table = 'cartao_credito';
    protected $primaryKey = 'cod_cartao_credito';
    public $timestamps = true;

    protected $fillable = [
        'cod_banco',
        'cod_bandeira_cartao',
        'final_cartao',
        'validade',
    ];

    // Define as relações com outras tabelas
    public function banco()
    {
        return $this->belongsTo(Banco::class, 'cod_banco');
    }

    public function bandeiraCartao()
    {
        return $this->belongsTo(BandeiraCartao::class, 'cod_bandeira_cartao');
    }
}
