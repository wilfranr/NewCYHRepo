<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medida extends Model
{
        // referencia a la tabla medidas
    use HasFactory;

    protected $fillable = [
        'nombre',
        'unidad',
        'valor',
        'tipo',
        'idMedida',
        'foto'
    ];

    public function articulos()
    {
        // referencia a la tabla articulos
        return $this->belongsToMany(Articulo::class, 'articulo_medida', 'medida_id', 'articulo_id');
    }
    
}

