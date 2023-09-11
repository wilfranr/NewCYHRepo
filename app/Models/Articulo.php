<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;

    //campos de la tabla articulos
    protected $fillable = [
        'marca',
        'definicion',
        'referencia',
        'descripcion_especifica',
        'comentarios',
        'peso',
        'fotoDescriptiva',
    ];

    //funcion para buscar medidas por referencia
    public function medidas()
    {
        return $this->belongsToMany(Medida::class, 'articulo_medida', 'articulo_id', 'medida_id');
    }

    //funcion para buscar pedidos por referencia
    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class, 'articulo_pedido')
            ->withPivot('cantidad')
            ->withTimestamps();
    }

    //funcion para buscar maquinas por referencia
    public function fotos()
    {
        return $this->hasMany(Foto::class);
    }

    //funcion para buscar imágenes por referencia
    public function imagenes()
    {
        return $this->hasMany(Imagen::class);
    }

    //funcion para buscar cambios por referencia
    public function suplencias()
    {
        return $this->hasMany(RelacionSuplencia::class, 'articulo_id');
    }

    //funcion para buscar juegos por referencia
    public function juegos()
    {
        return $this->hasMany(JuegoArticulo::class, 'articulo_id');
    }
}
