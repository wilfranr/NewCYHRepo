<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    protected $table = 'cotizaciones';

    protected $fillable = [
        'estado',
        'pedido_id',
        'tercero_id',
        // Otros campos permitidos para asignación masiva
    ];
    

    // Relación con el modelo Pedido (Cada cotización pertenece a un pedido)
    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }

    // Relación con el modelo Tercero (Cada cotización pertenece a un tercero)
    public function tercero()
    {
        return $this->belongsTo(Tercero::class);
    }
}


