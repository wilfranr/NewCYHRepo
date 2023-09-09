<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelacionSuplencia extends Model
{
    use HasFactory;
    protected $table = 'relacion_suplencia'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'articulo_id',
        'suplido_por_id',
    ];

    // Si quieres incluir las marcas de tiempo (timestamps), descomenta la siguiente línea
    // public $timestamps = true;

    // Define las relaciones con los modelos Articulo (artículo principal) y Articulo (artículo que lo suple)
    public function articuloPrincipal()
    {
        return $this->belongsTo(Articulo::class, 'articulo_id');
    }

    public function articuloSuplidor()
    {
        return $this->belongsTo(Articulo::class, 'suplido_por_id');
    }
}
