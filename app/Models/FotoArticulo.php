<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoArticulo extends Model
{
    // Importar el trait HasFactory para habilitar la funcionalidad de factoría en el modelo.
    use HasFactory;
    // Definir los campos que pueden ser llenados masivamente en la tabla de la base de datos.    
    protected $fillable = [
        'articulo_id',
        'ruta_foto',
    ];

    // Definir una relación de pertenencia que indica que este registro de Foto pertenece a un Artículo.   
    public function articulo()
    {
        // Utilizar el método belongsTo para establecer una relación de pertenencia con el modelo Articulo.   
        return $this->belongsTo(Articulo::class);
    }
}
