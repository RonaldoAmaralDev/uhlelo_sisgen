<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    protected $table = 'veiculos';
    protected $primaryKey = 'cod_veiculo';
    protected $fillable = [
        'cod_veiculo_especie',
        'frota',
        'cod_veiculo_marca',
        'cod_tp_frota',
        'frota_aux',
        'cod_veiculo_modelo',
        'cod_empresa',
        'cod_unidade',
        'cod_sub_unidade',
        'cod_cor',
        'posicao_conjunto',
        'backlog_aberto',
        'os_ciclo_preventivo',
        'km_atual',
        'horimetro_analogico',
        'horimetro_digital',
        'motor',
        'retarder',
        'tara',
        'capacidade',
        'placa',
        'renavam',
        'chassi',
        'antt',
        'dt_antt',
        'cor',
        'ano',
        'modelo_fab',
        'doc',
        'dt_val_doc',
        'dt_compra',
        'dt_garantia',
        'garantia',
        'tanque',
        'obs',
        'ativo',
        'linha_amarela',
        'modulo_trocado',
        'dt_cad',
        'cod_sec_user'
    ];

    public function especie()
    {
        return $this->belongsTo(VeiculoEspecie::class, 'cod_veiculo_especie');
    }

    public function marca()
    {
        return $this->belongsTo(VeiculoMarca::class, 'cod_veiculo_marca');
    }

    public function modelo()
    {
        return $this->belongsTo(VeiculoModelo::class, 'cod_veiculo_modelo');
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'cod_empresa');
    }

    public function unidade()
    {
        return $this->belongsTo(Unidade::class, 'cod_unidade');
    }

    public function subUnidade()
    {
        return $this->belongsTo(SubUnidade::class, 'cod_sub_unidade');
    }

    public function cor()
    {
        return $this->belongsTo(Cor::class, 'cod_cor');
    }

    public function secUser()
    {
        return $this->belongsTo(User::class, 'cod_sec_user');
    }

    public function tipoFrota()
    {
        return $this->belongsTo(TipoFrota::class, 'cod_tp_frota');
    }

    public function cicloPreventivo()
    {
        return $this->belongsTo(OsCicloPreventivo::class, 'os_ciclo_preventivo');
    }

    public function retarder()
    {
        return $this->belongsTo(Retarder::class, 'retarder');
    }

    public function moduloTrocado()
    {
        return $this->belongsTo(ModuloTrocado::class, 'modulo_trocado');
    }
}