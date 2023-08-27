<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marcas';
    protected $fillable = ['nombre'];

    // Relación muchos a muchos entre terceros y marcas
    public function terceros()
    {
        return $this->belongsToMany(Tercero::class, 'tercero_marca', 'marca_id', 'tercero_id');
    }

    //relacion uno a muchos entre marcas y maquinas
    public function maquinas()
    {
        return $this->belongsToMany(Maquina::class, 'maquina_marca');
    }

    //relacion uno a muchos entre marcas y pedidos
    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class, 'pedido_marca');
    }
}


