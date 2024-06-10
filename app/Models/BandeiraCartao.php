<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BandeiraCartao extends Model
{
    use HasFactory;

    protected $table = 'bandeira_cartao';
    protected $primaryKey = 'cod_bandeira_cartao';
    public $timestamps = true;

    protected $fillable = [
        'bandeira_cartao',
    ];
}
