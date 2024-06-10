<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BacklogStatus extends Model
{
    use HasFactory;

    protected $table = 'backlog_status';
    protected $primaryKey = 'cod_backlog_status';
    public $timestamps = true;

    protected $fillable = [
        'backlog_status',
    ];

    // Define as relações com outras tabelas
    public function historicos()
    {
        return $this->hasMany(BacklogHistorico::class, 'cod_backlog_status');
    }
}
