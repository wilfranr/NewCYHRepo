<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marcas';
    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen'
    ];


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
        // hace referencia a la tabla pedidos
        return $this->belongsToMany(Pedido::class, 'pedido_marca');
    }
}


