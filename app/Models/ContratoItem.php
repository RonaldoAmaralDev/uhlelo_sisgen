<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContratoItem extends Model
{
    use HasFactory;

    protected $table = 'contrato_itens';
    protected $primaryKey = 'cod_contrato_item';
    public $timestamps = true;

    protected $fillable = [
        'cod_contrato',
        'cod_veiculo',
        'num_aditivo',
        'km_inicial',
        'horimetro_digital_inicial',
        'horimetro_analogico_inicial',
        'km_final',
        'horimetro_digital_final',
        'horimetro_analogico_final',
        'dt_cad',
        'cod_sec_user',
    ];

    // Define a relação com a tabela de contratos
    public function contrato()
    {
        return $this->belongsTo(Contrato::class, 'cod_contrato');
    }

    // Define a relação com a tabela de veiculos
    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class, 'cod_veiculo');
    }

    // Define a relação com a tabela de aditivos
    public function aditivo()
    {
        return $this->belongsTo(Aditivo::class, 'num_aditivo');
    }

    // Define a relação com a tabela de usuarios
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'cod_sec_user');
    }
}
