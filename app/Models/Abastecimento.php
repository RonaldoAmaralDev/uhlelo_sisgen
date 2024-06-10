<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abastecimento extends Model
{
    use HasFactory;

    protected $table = 'abastecimento';
    protected $primaryKey = 'cod_abastecimento';
    public $timestamps = true;

    protected $fillable = [
        'cod_veiculo',
        'cod_colaborador',
        'cod_fornecedor',
        'cod_processo',
        'cod_tp_combustivel',
        'ticket',
        'km_atual',
        'km_anterior',
        'litros',
        'valor_un',
        'valor_total',
        'dt_abastecimento',
        'dt_cad',
        'cod_sec_user',
        'conta_gerada',
        'km_atualizado',
    ];

    // Define as relações com outras tabelas
    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class, 'cod_veiculo');
    }

    public function colaborador()
    {
        return $this->belongsTo(Colaborador::class, 'cod_colaborador');
    }

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class, 'cod_fornecedor');
    }

    public function processo()
    {
        return $this->belongsTo(Processo::class, 'cod_processo');
    }

    public function tipoCombustivel()
    {
        return $this->belongsTo(TipoCombustivel::class, 'cod_tp_combustivel');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'cod_sec_user');
    }
}
