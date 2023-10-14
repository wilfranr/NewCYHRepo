<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    // Importar el trait HasFactory para habilitar la funcionalidad de factoría en el modelo.
    use HasFactory;

    // Definir los campos que pueden ser llenados masivamente en la tabla de la base de datos.    
    protected $fillable = [
        'nombre',
        'telefono',
        'email',
        'cargo'
    ];

    // Definir una relación muchos a muchos que indica que este modelo se relaciona con varios Terceros.    
    public function terceros()
    {
        // Utilizar el método belongsToMany para establecer una relación muchos a muchos con el modelo Tercero.        
        return $this->belongsToMany(Tercero::class, 'contacto_tercero', 'contacto_id', 'tercero_id');
    }
}
