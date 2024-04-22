<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Articulo;

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
        return $this->belongsTo(Articulo::class, 'articulo_id');
    }

    //una referencia puede estar presenten en muchos pedidos
    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class, 'pedido_referencia', 'referencia_id', 'pedido_id')->withTimestamps();
    }
}
