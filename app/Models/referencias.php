<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class referencias extends Model
{
    use HasFactory;
    protected $table = 'referencias';
    protected $fillable = [
        'referencia',
        'articulo_id',
        'marca_id'
    ];
}
