<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Ciudad extends Model
{
    // Importar el trait HasFactory para habilitar la funcionalidad de factoría en el modelo.
    use HasFactory;
   // Definir el nombre de la tabla en la base de datos que este modelo representa.
    protected $table = 'ciudad'; // Nombre de la tabla en la base de datos
    // Definir el nombre de la clave primaria en la tabla.
    protected $primaryKey = 'CiudadID';
    // Definir una relación que indica que esta ciudad pertenece a un país.
    public function pais()
    {
        // Utilizar el método belongsTo para establecer una relación de pertenencia con el modelo Pais.
        return $this->belongsTo(Pais::class, 'PaisCodigo');
    }

    //Relación con Terceros
    // public function Terceros()
    // {
    //     return $this->belongsTo(Tercero::class);
    // }
}
