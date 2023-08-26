<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoArticuloTemporal extends Model
{
    // Importar el trait HasFactory para habilitar la funcionalidad de factoría en el modelo.   
    use HasFactory;
  
    // Definir el nombre de la tabla en la base de datos que este modelo representa.    
    protected $table = 'fotos_articulo_temporal';

    // Definir los campos que pueden ser llenados masivamente en la tabla de la base de datos.
    protected $fillable = [
        'articulo_temporal_id',
        'ruta_foto',
    ];
    // Definir una relación de pertenencia que indica que esta Foto de Artículo Temporal pertenece a un Artículo Temporal.
    public function articuloTemporal()
    {
        // Utilizar el método belongsTo para establecer una relación de pertenencia con el modelo ArticuloTemporal.
        return $this->belongsTo(ArticuloTemporal::class, 'articulo_temporal_id');
    }
}

