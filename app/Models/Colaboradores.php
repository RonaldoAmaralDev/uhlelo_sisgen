<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;

    protected $table = 'colaboradores';
    protected $primaryKey = 'cod_colaborador';
    protected $fillable = [
        'cod_colaborador2',
        'cod_tp_colaborador',
        'cod_departamento',
        'cod_empresa',
        'matricula',
        'cod_cidade',
        'cod_estado',
        'colaborador',
        'cpf',
        'rg',
        'rg_dt_expedicao',
        'titulo_eleitor',
        'zona',
        'secao',
        'ctps_num',
        'ctps_serie',
        'ctps_uf',
        'ctps_dt_expedicao',
        'cert_reserva',
        'pis_pasep',
        'pis_dt',
        'endereco',
        'bairro',
        'num',
        'cep',
        'comp',
        'sexo',
        'ecivil',
        'tel',
        'cel',
        'fax',
        'email',
        'dt_nasc',
        'dt_admissao',
        'dt_cadastro',
        'ativo',
        'afastado',
        'foto_cnh',
        'tipo_cnh',
        'num_cnh',
        'val_cnh',
        'res_168',
        'nome_pai',
        'nome_mae',
        'ref1',
        'tel_ref1',
        'ref2',
        'tel_ref2',
        'ref3',
        'tel_ref3',
        'comissao',
        'foto_colab',
        'senha_os',
        'finaliza_os',
        'executa_os',
        'ajusta_cadastro_veiculo',
        'linha_amarela',
        'borracharia',
    ];

    protected $casts = [
        'ativo' => 'boolean',
        'afastado' => 'boolean',
        'res_168' => 'boolean',
        'finaliza_os' => 'integer',
        'executa_os' => 'integer',
        'ajusta_cadastro_veiculo' => 'integer',
        'linha_amarela' => 'integer',
        'borracharia' => 'integer',
    ];

    protected $dates = ['rg_dt_expedicao', 'ctps_dt_expedicao', 'pis_dt', 'dt_nasc', 'dt_admissao', 'dt_cadastro', 'val_cnh'];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'cod_departamento');
    }

    public function cidade()
    {
        return $this->belongsTo(Cidade::class, 'cod_cidade');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'cod_estado');
    }
}