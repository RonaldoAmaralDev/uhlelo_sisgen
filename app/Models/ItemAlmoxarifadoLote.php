<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemAlmoxarifadoLote extends Model
{
    use HasFactory;

    protected $table = 'item_almoxarifado_lotes';
    protected $primaryKey = 'cod_item_almoxarifado_lote';
    protected $fillable = [
        'cod_item_almoxarifado',
        'cod_tp_movimentacao',
        'cod_item',
        'tipo',
        'numero',
        'dot',
        'dt_ultima_reforma',
        'numero_reforma',
        'numero_antigo',
        'motivo',
        'dt_alteracao_numero',
        'cod_sec_user_alteracao',
        'dt_cad',
        'cod_sec_user'
    ];

    // Relacionamento com o item almoxarifado
    public function itemAlmoxarifado()
    {
        return $this->belongsTo(ItemAlmoxarifado::class, 'cod_item_almoxarifado');
    }

    // Relacionamento com o tipo de movimentação
    public function tipoMovimentacao()
    {
        return $this->belongsTo(TpMovimentacao::class, 'cod_tp_movimentacao');
    }

    // Relacionamento com o item
    public function item()
    {
        return $this->belongsTo(Item::class, 'cod_item');
    }

    // Relacionamento com o usuário de alteração
    public function userAlteracao()
    {
        return $this->belongsTo(User::class, 'cod_sec_user_alteracao');
    }

    // Relacionamento com o usuário
    public function user()
    {
        return $this->belongsTo(User::class, 'cod_sec_user');
    }
}
