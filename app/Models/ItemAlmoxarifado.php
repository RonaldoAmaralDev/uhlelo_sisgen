<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemAlmoxarifado extends Model
{
    use HasFactory;

    protected $table = 'item_almoxarifado';
    protected $primaryKey = 'cod_item_almoxarifado';
    protected $fillable = [
        'cod_item',
        'cod_almoxarifado',
        'qte',
        'qte_min',
        'valor_custo',
        'transferido',
        'cod_almoxarifado_2',
        'dt_cad',
        'cod_sec_user'
    ];

    // Relacionamento com o item
    public function item()
    {
        return $this->belongsTo(Item::class, 'cod_item');
    }

    // Relacionamento com o almoxarifado
    public function almoxarifado()
    {
        return $this->belongsTo(Almoxarifado::class, 'cod_almoxarifado');
    }

    // Relacionamento com o segundo almoxarifado
    public function segundoAlmoxarifado()
    {
        return $this->belongsTo(Almoxarifado::class, 'cod_almoxarifado_2');
    }

    // Relacionamento com o usuário
    public function user()
    {
        return $this->belongsTo(User::class, 'cod_sec_user');
    }
}
