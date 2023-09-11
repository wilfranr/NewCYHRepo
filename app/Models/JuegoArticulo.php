<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JuegoArticulo extends Model
{
    use HasFactory;
    protected $table = 'articulos_juegos';
    protected $fillable = ['articulo_id', 'juego_por_id'];

    public function articuloPrincipal()
    {
        return $this->belongsTo(Articulo::class, 'articulo_id');
    }

    public function articuloJuego()
    {
        return $this->belongsTo(Articulo::class, 'juego_por_id');
    }


}
