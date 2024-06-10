<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    use HasFactory;

    protected $table = 'bancos';
    protected $primaryKey = 'cod_banco';
    public $timestamps = true;

    protected $fillable = [
        'num_banco',
        'banco',
    ];
}
