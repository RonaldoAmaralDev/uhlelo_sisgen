<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BacklogHistorico extends Model
{
    use HasFactory;

    protected $table = 'backlog_historico';
    protected $primaryKey = 'cod_backlog_historico';
    public $timestamps = true;

    protected $fillable = [
        'cod_backlog',
        'cod_backlog_status',
        'detalhes',
        'dt_cad',
        'cod_sec_user',
    ];

    // Define as relações com outras tabelas
    public function backlog()
    {
        return $this->belongsTo(Backlog::class, 'cod_backlog');
    }

    public function backlogStatus()
    {
        return $this->belongsTo(BacklogStatus::class, 'cod_backlog_status');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'cod_sec_user');
    }
}
