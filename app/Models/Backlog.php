<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Backlog extends Model
{
    use HasFactory;

    protected $table = 'backlog';
    protected $primaryKey = 'cod_backlog';
    public $timestamps = true;

    protected $fillable = [
        'cod_veiculo',
        'cod_backlog_acao',
        'cod_backlog_status',
        'cod_tp_criticidade',
        'cod_responsavel',
        'cod_os_gestao_abriu',
        'cod_os_gestao_finalizou',
        'descricao_falha',
        'obs',
        'dt_cad',
        'dt_finalizou',
        'cod_sec_user_abriu',
        'cod_sec_user_finalizou',
    ];

    // Define as relações com outras tabelas
    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class, 'cod_veiculo');
    }

    public function backlogAcao()
    {
        return $this->belongsTo(BacklogAcao::class, 'cod_backlog_acao');
    }

    public function backlogStatus()
    {
        return $this->belongsTo(BacklogStatus::class, 'cod_backlog_status');
    }

    public function tipoCriticidade()
    {
        return $this->belongsTo(TipoCriticidade::class, 'cod_tp_criticidade');
    }

    public function responsavel()
    {
        return $this->belongsTo(Responsavel::class, 'cod_responsavel');
    }

    public function ordemServicoAbriu()
    {
        return $this->belongsTo(OrdemServico::class, 'cod_os_gestao_abriu');
    }

    public function ordemServicoFinalizou()
    {
        return $this->belongsTo(OrdemServico::class, 'cod_os_gestao_finalizou');
    }

    public function usuarioAbriu()
    {
        return $this->belongsTo(User::class, 'cod_sec_user_abriu');
    }

    public function usuarioFinalizou()
    {
        return $this->belongsTo(User::class, 'cod_sec_user_finalizou');
    }
}