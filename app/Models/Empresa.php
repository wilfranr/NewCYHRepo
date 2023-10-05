<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = 'empresa';

    protected $fillable = [
        'nombre',
        'siglas',
        'direccion',
        'telefono',
        'celular',
        'email',
        'logo',
        'nit',
        'representante',
        'ciudad',
        'pais',
        // Agrega aquí otros campos que desees asignar masivamente
    ];
}

