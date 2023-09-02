<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Maquina extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo',
        'marca',
        'modelo',
        'serie',
        'arreglo',
        'foto',
        'fotoId'
    ];
    public function terceros()
    {
        // referencia a la tabla terceros
        return $this->belongsToMany(Tercero::class, 'tercero_maquina', 'maquina_id', 'tercero_id');
    }

    public static function allWithConcatenatedData()
    {
        // hace referencia a la tabla maquinas
        return self::all()->map(function ($maquina) {
            $concatenatedData = $maquina->tipo . ' ' . $maquina->marca . ' ' . $maquina->modelo . ' ' . $maquina->serie;
            return [
                'id' => $maquina->id,
                'text' => $concatenatedData
            ];
        });
    }

    public function articulos()
    {
        // referencia a la tabla articulos
        return $this->belongsToMany(Articulo::class, 'maquina_articulo')
            ->withPivot('fabricante', 'tipo_maquina');
    }

    // maquinas_pedido
    public function pedidos()
    {
        // referencia a la tabla pedidos
        return $this->belongsToMany(Pedido::class, 'maquinas_pedido', 'maquina_id', 'pedido_id')->withTimestamps();
    }

    public function marcas()
    {
        // referencia a la tabla marcas
        return $this->belongsToMany(Marca::class, 'maquina_marca');
    }
}
