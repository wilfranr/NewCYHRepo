<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Definición de la clase Departamento que extiende el modelo Eloquent.
class Departamento extends Model
{
    // Importar el trait HasFactory para habilitar la funcionalidad de factoría en el modelo.
    use HasFactory;

    // Definir los campos que pueden ser llenados masivamente en la tabla de la base de datos.    
    protected $fillable = ['nombre', 'codigo'];

    // Definir una relación de pertenencia que indica que este Departamento pertenece a un País.    
    public function pais()
    {
        // Utilizar el método belongsTo para establecer una relación de pertenencia con el modelo Pais.
        return $this->belongsTo(Pais::class);
    }

    // Definir una relación uno a muchos que indica que este Departamento tiene muchas Ciudades.   
    public function ciudades()
    {
        // Utilizar el método hasMany para establecer una relación uno a muchos con el modelo Ciudad.  
        return $this->hasMany(Ciudad::class);
    }
}

