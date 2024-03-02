<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Medida;
use App\Models\Pedido;
use App\Models\Foto;
use App\Models\Imagen;
use App\Models\RelacionSuplencia;
use App\Models\JuegoArticulo;
use App\Models\Sistemas;
use App\Models\Referencia;


class Articulo extends Model
{

    //campos de la tabla articulos
    protected $fillable = [
        'marca',
        'definicion',
        // 'referencia',
        'descripcionEspecifica',
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
            ->withPivot('comentario')
            ->withTimestamps();
    }

    // //funcion para buscar maquinas por referencia
    // public function fotos()
    // {
    //     return $this->hasMany(Foto::class);
    // }

    // //funcion para buscar imágenes por referencia
    // public function imagenes()
    // {
    //     return $this->hasMany(Imagen::class);
    // }

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

    //definir relacion uno a muchos con la tabla sistemas_articulos
    public function sistemas()
    {
        return $this->belongsToMany(Sistemas::class, 'sistemas_articulos', 'articulo_id', 'sistema_id')->withTimestamps();
    }

    public function sistemasPedidos()
    {
        return $this->belongsToMany(Pedido::class, 'pedido_articulo_sistema', 'articulo_id', 'pedido_id')
            ->withPivot('sistema_id');
    }

    public function sistemaPedidoEnPedido($pedidoId)
    {
        return $this->belongsToMany(Sistemas::class, 'pedido_articulo_sistema', 'articulo_id', 'sistema_id')
            ->wherePivot('pedido_id', $pedidoId)
            ->withPivot('pedido_id');
    }

    public function referencias()
    {
        return $this->belongsToMany(Referencia::class, 'referencias_articulos', 'articulo_id', 'referencia_id');
    }
}
