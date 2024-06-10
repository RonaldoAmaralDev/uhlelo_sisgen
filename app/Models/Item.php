<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';
    protected $primaryKey = 'cod_item';
    public $timestamps = true;

    protected $fillable = [
        'cod_atak',
        'cod_tp_item',
        'cod_item_marca',
        'cod_dimensao',
        'cod_un_medida',
        'un_medida_aux',
        'controla_lote',
        'descricao',
        'ativo',
        'borracharia',
        'qte',
        'custo',
        'cod_aux_ferramenta',
        'ferramentaria',
        'movimenta_estoque',
        'dt_cad',
        'dt_alteracao',
        'cod_sec_user',
    ];

    public function tipoItem()
    {
        return $this->belongsTo(TipoItem::class, 'cod_tp_item');
    }

    public function itemMarca()
    {
        return $this->belongsTo(ItemMarca::class, 'cod_item_marca');
    }

    public function dimensao()
    {
        return $this->belongsTo(Dimensao::class, 'cod_dimensao');
    }

    public function unidadeMedida()
    {
        return $this->belongsTo(UnidadeMedida::class, 'cod_un_medida');
    }

    public function ferramentaCaixaItem()
    {
        return $this->belongsTo(FerramentaCaixaItem::class, 'cod_aux_ferramenta');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'cod_sec_user');
    }
}
