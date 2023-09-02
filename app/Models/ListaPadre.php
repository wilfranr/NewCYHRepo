<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaPadre extends Model
{
    // referencia a la tabla lista_padre
    use HasFactory;

    // campos de la tabla lista_padre
    protected $fillable = [
        'nombre',
    ];
}
