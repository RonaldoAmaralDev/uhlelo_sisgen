<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VeiculoEspecie extends Model
{
    use HasFactory;

    protected $table = 'veiculo_especie';
    protected $primaryKey = 'cod_veiculo_especie';
    protected $fillable = [
        'veiculo_especie',
        'capacidade',
        'controle_os',
        'valida_km_horimetro',
        'cod_os_plano_manutencao_01',
        'cod_os_plano_manutencao_02',
        'posicao_conjunto',
    ];
}