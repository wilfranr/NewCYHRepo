<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tercero;
use App\Models\Pedido;
use App\Models\ArticuloTemporal;

class Sistemas extends Model
{
    // Utiliza el trait HasFactory para simplificar la creación de instancias del modelo.
    use HasFactory;
    // Indica la tabla de la base de datos a la que este modelo está asociado.
    protected $table = 'sistemas';
    // Define los campos que pueden ser asignados en masa.  
    protected $fillable = ['nombre'];
    // Define una relación "muchos a muchos" con el modelo Tercero.
    public function terceros()
    {
        return $this->belongsToMany(Tercero::class, 'tercero_sistema', 'sistema_id', 'tercero_id');
    }

    // Define otra relación "muchos a muchos" con el modelo Pedido.
    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class, 'pedido_sistema', 'sistema_id', 'pedido_id');
    }

    // Define una relación "muchos a muchos" con el modelo ArticuloTemporal.
    public function articulosTemporales()
    {
        return $this->belongsToMany(ArticuloTemporal::class, 'sistemas_articulos_temporales', 'sistema_id', 'articulo_temporal_id');
    }

    //define la relacióm muchos a muchos con la tabla articulos
    public function articulos()
    {
        return $this->belongsToMany(Articulo::class, 'sistemas_articulos', 'sistema_id', 'articulo_id')->withTimestamps();
    }
}
