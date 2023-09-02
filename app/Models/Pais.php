<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
        // referencia a la tabla paises
    protected $primaryKey = 'PaisCodigo';
    public $incrementing = false;

    public function ciudades()
    {
        // referencia a la tabla ciudades
        return $this->hasMany(Ciudad::class, 'PaisCodigo');
    }
}
