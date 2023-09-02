<?php

namespace App\Models;

    // Importar el trait HasFactory para habilitar la funcionalidad de factoría en el modelo.
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Lista extends Model
{
    // hacer referencia a la tabla de la base de datos que este modelo representa. 
    use HasFactory; 

   
    // Definir los campos que pueden ser llenados masivamente en la tabla de la base de datos.
    protected $fillable = [
        
        'tipo',
        'nombre',
        'definicion',
        'foto',
        'fotoMedida',	
    ];
}
