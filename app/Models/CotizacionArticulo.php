<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CotizacionArticulo extends Model
{
    protected $table = 'cotizacion_articulo';

    protected $fillable = [
        'cotizacion_id',
        'articulo_id',
        'proveedor_id', 
        'referencia',
        'definicion',
        'marca',
        'plazo_entrega',
        'precio_venta',
        'cantidad',
    ];

    /**
     * Relación con el modelo Cotizacion.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cotizacion()
    {
        return $this->belongsTo(Cotizacion::class, 'cotizacion_id');
    }

    /**
     * Relación con el modelo Articulo.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function articulo()
    {
        return $this->belongsTo(Articulo::class, 'articulo_id');
    }
}
