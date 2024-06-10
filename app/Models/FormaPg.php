<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormaPg extends Model
{
    use HasFactory;

    protected $table = 'forma_pg';
    protected $primaryKey = 'cod_forma_pg';
    public $timestamps = true;

    protected $fillable = [
        'forma_pg',
    ];

}
