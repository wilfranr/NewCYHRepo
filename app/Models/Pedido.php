<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Articulo;
use App\Models\Tercero;
use App\Models\User;
use App\Models\Maquina;
use App\Models\Contacto;
use App\Models\ItemPedido;
use App\Models\ArticuloTemporal;
use App\Models\Marca;
use App\Models\Sistema;

class Pedido extends Model
{
    // referencia a la tabla pedidos
    use HasFactory;
    protected $fillable = [
        'tercero_id',
        'user_id',
        'maquina_id',
        'contacto_id',
        'comentario',
        'estado',
    ];
    public function articulos()
    {
        // referencia a la tabla articulos
        return $this->belongsToMany(Articulo::class, 'articulo_pedido')
            ->withPivot('cantidad')
            ->withPivot('comentario')
            ->withTimestamps();
    }

    //un pedido puede tener muchas referencias
    public function referencias()
    {
        return $this->belongsToMany(Referencia::class, 'pedido_referencia', 'pedido_id', 'referencia_id')->withTimestamps();
    }

    //relacion terceros
    public function tercero()
    {
        // relacion con la tabla terceros
        return $this->belongsTo(Tercero::class);
    }


    // public function items()
    // {
    //     // relacion con la tabla items_pedidos
    //     return $this->hasMany(ItemPedido::class);
    // }

    public function user()
    {
        // relacion con la tabla users
        return $this->belongsTo(User::class);
    }

    public function maquinas()
    {
        // referencia a la tabla maquinas
        return $this->belongsToMany(Maquina::class, 'maquinas_pedido', 'pedido_id', 'maquina_id')->withTimestamps();
    }


    public function contacto()
    {
        // Define una relación de "pertenencia a uno" con el modelo Contacto.
        return $this->belongsTo(Contacto::class);
    }

    public function articulosTemporales()
    {
        // Define una relación de "muchos a muchos" con el modelo ArticuloTemporal.
        return $this->belongsToMany(ArticuloTemporal::class, 'pedidos_articulos_temporales', 'pedido_id', 'articulo_temporal_id')->withTimestamps();
    }

    public function marcas()
    {
        // Define una relación de "muchos a muchos" con el modelo Marca.
        return $this->belongsToMany(Marca::class, 'pedido_marca');
    }

    public function sistemas()
    {
        // Define una relación de "muchos a muchos" con el modelo Sistemas.
        return $this->belongsToMany(Sistemas::class, 'pedido_sistema', 'pedido_id', 'sistema_id')->withTimestamps();
    }

    public function cotizaciones()
    {
        return $this->hasMany(Cotizacion::class);
    }

    public function articulosSistemas()
    {
        return $this->belongsToMany(Articulo::class, 'pedido_articulo_sistema', 'pedido_id', 'articulo_id')
            ->withPivot('sistema_id');
    }
    // En el modelo Pedido
    public function sistemasPedidos()
    {
        return $this->belongsToMany(Sistemas::class, 'pedido_articulo_sistema', 'pedido_id', 'sistema_id')
            ->withPivot('articulo_id');
    }
}
