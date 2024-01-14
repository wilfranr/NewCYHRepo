<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referencia extends Model
{
    use HasFactory;
    protected $table = 'referencias';
    protected $fillable = [
        'referencia',
        'articulo_id',
        'marca_id'
    ];

    public function articulos()
    {
        return $this->belongsToMany(Articulo::class, 'referencias_articulos', 'referencia_id', 'articulo_id');
    }
}
