<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pedido;
use App\Models\FotoArticuloTemporal;
use App\Models\Sistemas;

class ArticuloTemporal extends Model
{
    // referencia a la tabla articulo_temporal
    use HasFactory;

    protected $table = 'articulo_temporal';

        // campos de la tabla articulo_temporal
    protected $fillable = [
        'pedido_id',
        'referencia',
        'definicion',
        'sistema',
        'cantidad',
        'comentarios'
    ];

    public function fotos()
    {
            // referencia a la tabla fotos_articulo_temporal
        return $this->hasMany(FotoArticuloTemporal::class, 'articulo_temporal_id');
    }

    public function pedido()
    {
        // hace referencia a la tabla pedidos
        return $this->belongsToMany(Pedido::class, 'pedidos_articulos_temporales', 'articulo_temporal_id', 'pedido_id')->withTimestamps();
    }



    public function fotosArticuloTemporal()
    {
        
        return $this->hasMany(FotoArticuloTemporal::class);
    }

    //define la relacióm muchos a muchos con la tabla sistemas
    public function sistemas()
    {
        return $this->belongsToMany(Sistemas::class, 'sistemas_articulos_temporales', 'articulo_temporal_id', 'sistema_id')->withTimestamps();
    }
}
